<?php

include_once("koneksi.php");
$tampil = mysqli_query($mysqli, "SELECT * FROM data");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BELAJAR CRUD</title>
    <center><h1>Belajar CRUD dengan koneksi MYSQLI</h1></center>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    
<form method="post" action="./fungsi/tambah.php">
	<button type="submit">Tambah Data</button>
	</form><br>
<!-- <a href="./fungsi/tambah.php" class="btn btn-success">Tambah Data</a><br/><br/> -->

<center><table width='80%' border=2></center>

<tr>
    <th>Nama</th> 
    <th>Username</th> 
    <th>Password</th> 
    <th>Email</th>
    <th>opsi</th>
</tr>
<?php  
while($data = mysqli_fetch_array($tampil)) {         
    echo "<tr>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['username']."</td>";
    echo "<td>".$data['password']."</td>";    
    echo "<td>".$data['email']."</td>";    
    echo "<td><a href='./fungsi/ubah.php?id=$data[id]'>UBAH</a> | <a href='./fungsi/hapus.php?id=$data[id] ' >HAPUS</a></td></tr>";        
}
?>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>