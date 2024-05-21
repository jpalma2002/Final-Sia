<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thrifties List PDF</title>
    <style>

    </style>
</head>
<body>
    <h1>Thrifties</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>QR Code</th>
                <th>Brand Name</th>
                <th>Description</th>
                <th>Price</th>
          
            </tr>
        </thead>
        <tbody>
            @foreach ($thrifties as $thrifty)
                <tr>
                    <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($thrifty->id)) }}" alt="QR Code"></td>
                    <td>{{ $thrifty->brand_name }}</td>             
                    <td>{{ $thrifty->description }}</td>
                    <td>{{ $thrifty->price }}</td>
              

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
