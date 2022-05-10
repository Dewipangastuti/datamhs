<table border="0">
@foreach($data_mahasiswa as $dm)
<form action='/project_fiqri/public/proses_ubah' method='POST'>
{{ csrf_field() }}
<input type="text" hidden name="id" value="{{ $dm->nim }}">
<tr>
	<td>NIM</td>
	<td><input type="text" name="nim" value="{{ $dm->nim }}"></td>
</tr>

<tr>
	<td>Nama</td>
	<td><input type="text" name="nama" value="{{ $dm->nama }}"></td>
</tr>

<tr>
	<td>Alamat</td>
	<td><textarea name="alamat">{{ $dm->alamat }}</textarea></td>
</tr>

<tr>
	<td>Program Studi</td>
	<td>
	<select name="program_studi" >
	<option value="{{ $dm->program_studi }}">{{ $dm->program_studi
	}}</option>
	<option value='Teknologi Otomotif'>Teknologi Otomotif</option>
	<option value='Sistem Informasi'>Sistem Informasi</option>
	<option value='Komunikasi Massa'>Komunikasi Massa</option>
	<option value='Perhotelan'>Perhotelan</option>
	<option value='Farmasi'>Farmasi</option>
	<option value='Manajemen Informasi Kesehatan'>Manajemen Informasi
	Kesehatan</option>
	</select>
	</td>
</tr>

<tr>
	<td>IPK</td>
	<td><input type="text" name="ipk" value="{{ $dm->ipk }}"></td>
</tr>

<tr>
	<td></td>
	<td><input type='submit' value='Simpan'></td>
</tr>

</form>
@endforeach
</table>