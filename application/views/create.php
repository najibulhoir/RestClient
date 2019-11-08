<?php echo form_open('mahasiswa/create');?>
<table>
 <tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
 <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
 <tr><td>JURUSAN</td><td>
 <select name="jurusan">
<?php
$connection = mysql_connect("localhost", "root", "") or die 
(mysql_error());
mysql_select_db("Mahasiswa", $connection) or die(mysql_error());
$sql = mysql_query('SELECT * FROM jurusan ORDER BY id_jurusan ASC;');
?>
 <?php if (mysql_num_rows($sql) > 0) { ?>
<?php while ($row = mysql_fetch_array($sql)) { ?>
<option><?php echo $row['id_jurusan'] ?></option>
<?php } ?>
<?php } ?>
 </select>
 </td></tr>
 <tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>
 <tr><td colspan="2">
 <?php echo form_submit('submit','Simpan');?>
 <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
