<a href="/project_fiqri/public/tambah"> Tambah </a>
<a href="/project_fiqri/public/cetakword"> Word </a>
<a href="/project_fiqri/public/cetakexcel"> Excel </a>
<a href="/project_fiqri/public/cetakpdf"> PDF </a>
<a href="/project_fiqri/public/grafik"> Grafik </a>

<table border="1">
<tr>
	<th>NIM</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>Program Studi</th>
	<th>IPK</th>
	<th>Opsi</th>
</tr>
@foreach($data_mahasiswa as $d_m)
<tr>
	<td>{{ $d_m->nim }}</td>
	<td>{{ $d_m->nama }}</td>
	<td>{{ $d_m->alamat }}</td>
	<td>{{ $d_m->program_studi }}</td>
	<td>{{ $d_m->ipk }}</td>
	<td>
		<a href="/project_dewi/public/ubah/{{$d_m->nim }}">
		Ubah</a>
		|
		<a href="/project_dewi/public/hapus/{{$d_m->nim }}">
		Hapus</a>
	</td>
</tr>

@endforeach
</table>
