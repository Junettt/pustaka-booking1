<html>
<head>
 <title>Form Input Data Mahasiswa</title>
</head>

<body>
 <center>
<?php echo validation_errors(); ?>
 <form action="<?= base_url('Dlemas/cetak'); ?>" method="post">
 <table>
    <tr>
    <th colspan="3">
    Form Input Data Mahasiswa
    </th>
    </tr>
    <tr>
    <td colspan="3">
    <hr>
    </td>
</tr>

<tr>
    <th>Nama Siswa</th>
    <th>:</th>
    <td>
    <input type="text" name="namasiswa" id="namasiswa">
    </td>
</tr>

<tr>
    <th>NIS</th>
    <th>:</th>
    <td>
    <input type="text" name="nis" id="nis">
    </td>
</tr>

<tr>
    <th>Kelas</th>
    <th>:</th>
    <td>
    <input type="text" name="kelas" id="kelas">
    </td>
</tr>

 <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>
 <input type="text" name="tgllahir" id="tgllahir">
 </td>
 </tr>

 <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td>
 <input type="text" name="tmptlahir" id="tmptlahir">
 </td>
 </tr>


 <tr>
    <th>Alamat</th>
    <th>:</th>
    <td>
    <input type="text" name="alamat" id="alamat">
    </td>
</tr>

 <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
    <input type="radio" name="jeniskl" value="Laki-Laki">Laki-Laki
    <input type="radio" name="jeniskl" value="Perempuan">Perempuan
    </td>
 </tr>

 <tr>
    <th>Agama</th>
    <th>:</th>
    <td>
    <select name="agama">
        <option value="-------">
        <option value="Islam">Islam
        <option value="Kristen">Kristen
        <option value="Katolik">Katolik
        <option value="Hindu">Hindu
        <option value="Buddha">Buddha
        <option value="Protestan">Protestan
        <option value="Khonghucu">Khonghucu
        </option>

    </select>
    </td>
</tr>

 <tr>
    <td colspan="3" align="center">
    <input type="submit" value="Submit">
    </td>
 </tr>

 </table>

 </form>
 </center>
</body>
</html>