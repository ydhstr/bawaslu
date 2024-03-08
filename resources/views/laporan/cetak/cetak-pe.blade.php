<!DOCTYPE html>
<html>

<head>
    <title>Laporan Performa Petugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/cropped-logo_5e7c48724a6631.png">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
        .p1 {
        font-family: "Times New Roman", Times, serif;
    }

    body {
        font-family: arial;
        background-color: #fff;
    }

    .rangkasurat {
        width: 980px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
    }

    .custom-table {
         border-collapse: collapse;
         border: 1px solid #000;
         width: 100%;
    }

    .custom-table th, .custom-table td {
         border: 1px solid #000;
         padding: 8px;
         text-align: left;
    }

    .custom-table th {
        background-color: #f2f2f2;
    }
    .atas {
            border-bottom: 5px solid #000;
            padding: 2px;
        }
    .tengah {
        text-align: center;
        line-height: 5px;
    }
    
    @page {
            size: A4;
            margin: 1cm;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .container {
                width: 100%;
            }

            .signature {
                margin-top: 10px;
            }
        }
</style>
<center>
    <div class="container">
        <table class="atas" width="100%">
            <tr>
                <td><img src="/img/cropped-logo_5e7c48724a6631.png" width="150px"></td>
                <td class="tengah" style="text-align: center;">
                    <h1 class="p1"><b>BAWASLU</b></h1>
                    <h3 class="p1">Badan Pengawas Pemilihan Umum</h3>
                    <h1 class="p1"></h1>
                    <h5 class="p1">Jalan Taisir, Sungai Sipai, Kec. Martapura, Kabupaten Banjar, Kalimantan Selatan 70714.</h5>
                </td>
            </tr>
        </table>
    </div>
</center>
<br>
<h5><center><b>Laporan Performa Petugas</b></center></h5>
    <h6><center><p>Dari: {{ $dari }}  Sampai: {{ $sampai }}</p></center></h6>
    <div class="card-body">
        <div class="table-responsive">
            <table class="custom-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Jabatan</th>
                <th>Performa</th>
                <th>Deskripsi</th>
                <th>Penilaian</th>
            </tr>
        </thead>
        <tbody>
            @php
                  $no=1;
                  @endphp
                  @foreach ($performa as $index => $item)
                  <tr>
                    <td class="px-6 py-2">{{ $loop->iteration }}</td>
                      <td class="px-6 py-2">{{ $item->petugas_lapangan->nama }}</td>
                      <td class="px-6 py-2">{{ $item->petugas_lapangan->jabatan }}</td>
                      <td class="px-6 py-2">{{ $item->performa }}</td>
                      <td class="px-6 py-2">{{ $item->deskripsi }}</td>
                      <td class="px-6 py-2">{{ $item->penilaian }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <br>
    <br>
    <br>
    <br>
    <div class="signature-table">
<table border="0" align="center" class="mt-20">
    <tr>
        <th style="text-align: center;"></th>
        <th style="text-align: center;" width="100px"></th>
        <th style="text-align: center;">Martapura,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ date(' F Y', strtotime($item->updated_at)) }}</th>
    </tr>
    <tr>
        <td style="text-align: center;"></td>
        <td style="text-align: center;" class="signature-column"></td>
        <td style="text-align: center;">Ketua Bawaslu Kabupaten Banjar</td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr> 
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr><td></td></tr>
    <tr>
        <td style="text-align: center;" colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td style="text-align: center;"><b style="text-transform:uppercase"><u></u></b></td>
        <td style="text-align: center;"></td>
        <td style="text-align: center;"><b><u>Muhammad Hafizh Ridha, S.H</u></b></td>
    </tr>
</table>
</div>
<style>
    /* Default menyembunyikan tanda tangan */
    .signature-table {
        display: none;
    }

    /* Menampilkan tanda tangan di halaman terakhir */
    .show-signature {
        display: table;
        position: fixed;
        bottom: 0;
        width: 160%;
    }
</style>
<script>
    // Mengecek jumlah halaman dokumen saat mencetak
    window.onbeforeprint = function() {
        var pages = document.querySelectorAll('body > div.page');

        // Jika hanya ada satu halaman, tampilkan tanda tangan
        if (pages.length <= 1) {
            var signatureTable = document.querySelector('.signature-table');
            signatureTable.classList.add('show-signature');
        }
    };
</script>
    <script>
        window.onload = function() {
            window.print();
        };
    </script> 
    </html>