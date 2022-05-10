<table border="0">
<form action='proses_tambah' method='POST'>
{{ csrf_field() }}
<tr>
	<td>NIM</td>
	<td><input type="text" name="nim"></td>
</tr>

<tr>
	<td>Nama</td>
	<td><input type="text" name="nama"></td>
</tr>

<tr>
	<td>Alamat</td>
	<td><textarea name="alamat"></textarea></td>
</tr>

<tr>
	<td>Program Studi</td>
	<td>
	<select name="program_studi">
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
	<td><input type="text" name="ipk" ></td>
</tr>

<tr>
	<td></td>
	<td><input type='submit' value='Simpan'></td>
</tr>

</form>
</table>