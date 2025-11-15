<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang</title>
</head>
<body>
    <h1>laporan barang M.Yudha Suryanata</h1>
    <table width="100%" cellpadding="10" cellspacing="0" border=1>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Stok</th>
        </tr>

        @foreach ($data as $key => $item)
            <tr>
                <td align="center">{{$key + 1}}</td>
                <td align="center">{{$item->kode}}</td>
                <td align="center">{{$item->nama}}</td>
                <td align="center">{{$item->stok}}</td>
            </tr>
        @endforeach
    </table>
    <p style="text-align: right">Banjarmasin, 8 November 2025</p>
    <p style="text-align: right; width: 620px;">Admin</p>
    <br>
    <br>
    <p style="text-align: right"><b><u>Muhammad Yudha Suryanata</u></b></p>
</body>
</html>