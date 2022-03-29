
<div class="container">
    <div class="col-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td colspan="2">Data Warga Penerima Bantuan</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th width="30%">Nama</th>
                    <td>{{ $record['nama'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>{{ $record['nik'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Nomor KK</th>
                    <td>{{ $record['no_kk'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Foto KTP</th>
                    <td>
                        <img class="image-preview"  style="height: 4cm; object-fit: cover;" src="{{ asset('storage/uploads/'.$record['foto_ktp']) }}">
                    </td>
                </tr>
                <tr>
                    <th>Foto KK</th>
                    <td>
                        <img class="image-preview"  style="width: 15cm; object-fit: cover;" src="{{ asset('storage/uploads/'.$record['foto_kk']) }}">    
                    </td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td>{{ $record['umur'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $record['jk'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Provinsi</th>
                    <td>{{ $record['provinsi'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Kota/ Kab</th>
                    <td>{{ $record['kota'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Kecamatan</th>
                    <td>{{ $record['camat'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Kelurahan</th>
                    <td>{{ $record['lurah'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $record['alamat'] ?? '-' }}, Rt. {{ $record['rt'] ?? '-' }} - Rw. {{ $record['rw'] ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Pengahsilan Sebelum Pandemin</th>
                    <td>Rp. {{ $record['sebelum'] ? number_format($record['sebelum']) : '-' }}</td>
                </tr>
                <tr>
                    <th>Pengahsilan Sesudah Pandemin</th>
                    <td>Rp. {{ $record['sesudah'] ? number_format($record['sesudah']) : '-' }}</td>
                </tr>
                <tr>
                    <th>Alasan Membutuhkan Bantuan</th>
                    <td>{{ $record['alasan'] ?? '-' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


