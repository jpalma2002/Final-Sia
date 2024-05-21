<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thrifty; // Import the Thrifty model
use Barryvdh\DomPDF\Facade\Pdf;

class ThriftyController extends Controller
{
    public function index() {
        $thrifties = Thrifty::orderBy('id')->get();
        return view('thrifty', compact('thrifties')); // Adjust the view name if necessary
    }

    public function generateCSV() {
        $thrifties = Thrifty::orderBy('id')->get();

        $filename = 'thrifties.csv';

        $file = fopen('php://temp', 'w+');


        fputcsv($file, ['ID', 'Brand Name', 'Description', 'Price']);

        foreach($thrifties as $thrift) {
            fputcsv($file, [
                $thrift->id,
                $thrift->brand_name,
                $thrift->description,
                $thrift->price,
             
            ]);
        }

        rewind($file);

        $response = response(stream_get_contents($file), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);

        fclose($file);

        return $response;
    }

    public function pdf(){
        $thrifties = Thrifty::orderBy('brand_name')->get();
        $pdf = Pdf::loadView('thrifty-list', compact('thrifties'));

        return $pdf->download('thrifty-list.pdf');
    }


    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);
    
        // Get the uploaded file
        $file = $request->file('csv_file');
    
        // Read the contents of the file
        $csvData = array_map('str_getcsv', file($file->getPathname()));
    
        $headersSkipped = false;
    
        foreach ($csvData as $row) {
            // Skip the first row (headers)
            if (!$headersSkipped) {
                $headersSkipped = true;
                continue;
            }
    
            $brand_name = $row[0];
            $description = $row[1];
            $price = $row[2];
    
            if (is_numeric($price)) {
                Thrifty::create([
                    'brand_name' => $brand_name,
                    'description' => $description,
                    'price' => $price,
                ]);
            } else {
                error_log("Invalid price value for row: " . implode(', ', $row));
            }
        }
    
        return redirect()->route('thrifty')->with('success', 'Thrifty imported successfully.');
    }
    
}
