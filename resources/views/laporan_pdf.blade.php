<!DOCTYPE html>
<html>
<head>
    <title>Laporan Kas</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .header { text-align: center; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>LAPORAN CATAT KAS</h2>
        <hr>
    </div>
    <p>Total Masuk: Rp {{ number_format($total_masuk) }}</p>
    <p>Total Keluar: Rp {{ number_format($total_keluar) }}</p>
    <p><strong>Saldo Akhir: Rp {{ number_format($saldo_akhir) }}</strong></p>
    
    <table>
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Tipe</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->keterangan }}</td>
                <td>{{ ucfirst($item->tipe) }}</td>
                <td>Rp {{ number_format($item->jumlah) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>