<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $index => $buku)
            <tr>
                <td>{{ $index+1 }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp. ".number_format($buku->harga, 2, ',','.') }}</td>
                <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Menampilkan jumlah total buku -->
    <div>
        <strong>Total Buku:</strong> {{ $total_buku }}
    </div>

    <!-- Menampilkan total harga semua buku -->
    <div>
        <strong>Total Harga Buku:</strong> Rp. {{ number_format($total_harga, 2, ',', '.') }}
    </div>
</body>
</html>
