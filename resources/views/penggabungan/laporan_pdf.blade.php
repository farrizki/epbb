<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Penggabungan SPPT</title>
    <style>
        body { font-family: 'sans-serif'; font-size: 10px; }
        .table { width: 100%; border-collapse: collapse; }
        .table th, .table td { border: 1px solid #000; padding: 5px; text-align: left; }
        .table th { background-color: #f2f2f2; }
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Laporan Penggabungan SPPT</h2>
    <table class="table">
        <thead>
            <tr>
                <th>NOP</th>
                <th>Tahun</th>
                <th>Nama WP</th>
                <th>Letak OP</th>
                <th class="text-right">Bumi (m²)</th>
                <th class="text-right">Bangunan (m²)</th>
                <th class="text-right">PBB Terhutang</th>
                <th>Keterangan</th>
                <th>Operator</th>
                <th>Tgl Proses</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($dataLaporan as $item)
                <tr>
                    <td>{{ $item->formatted_nop }}</td>
                    <td>{{ $item->thn_pajak_sppt }}</td>
                    <td>{{ $item->nm_wp_sppt }}</td>
                    <td>{{ $item->letak_op }}</td>
                    <td class="text-right">{{ number_format($item->luas_bumi_sppt, 0, ',', '.') }}</td>
                    <td class="text-right">{{ number_format($item->luas_bng_sppt, 0, ',', '.') }}</td>
                    <td class="text-right">{{ number_format($item->pbb_terhutang_sppt, 0, ',', '.') }}</td>
                    <td>{{ $item->keterangan_penggabungan }}</td>
                    <td>{{ $item->operator }}</td>
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center">Tidak ada data ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
