<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .detail {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <h1>Detail Barang</h1>
    <p><strong>Tanggal:</strong> {{ date('d M Y') }}</p>

    <div class="detail">
        <span class="label">ID:</span> {{ $barang->id }}
    </div>
    <div class="detail">
        <span class="label">Nama Barang:</span> {{ $barang->nama_barang }}
    </div>
    <div class="detail">
        <span class="label">Deskripsi:</span> {{ $barang->deskripsi ?? '-' }}
    </div>
    <div class="detail">
        <span class="label">Stok:</span> {{ $barang->stok }}
    </div>
    <div class="detail">
        <span class="label">Harga:</span> Rp {{ number_format($barang->harga, 0, ',', '.') }}
    </div>
    <div class="detail">
        <span class="label">Total Nilai:</span> Rp {{ number_format($barang->stok * $barang->harga, 0, ',', '.') }}
    </div>
    <div class="detail">
        <span class="label">Dibuat Pada:</span> {{ $barang->created_at->format('d M Y H:i') }}
    </div>
    <div class="detail">
        <span class="label">Diperbarui Pada:</span> {{ $barang->updated_at->format('d M Y H:i') }}
    </div>

    <div class="footer">
        <p>Laporan ini dibuat secara otomatis oleh Sistem Inventori Barang</p>
    </div>
</body>
</html>
