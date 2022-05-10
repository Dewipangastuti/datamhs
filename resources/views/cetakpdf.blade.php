<table border="1">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Program Studi</th>
	</tr>
	@foreach($data_mahasiswa as $d_m)
	<tr>
		<td>{{ $d_m->nim }}</td>
		<td>{{ $d_m->nama }}</td>
		<td>{{ $d_m->alamat }}</td>
		<td>{{ $d_m->program_studi }}</td>
	</tr>
	@endforeach
</table>