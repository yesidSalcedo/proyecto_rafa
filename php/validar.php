<?php
$usuario = $_POST["usu"];
$pass = $_POST["pass"];
$sql = "select count(u5u4r10) from log where u5u4r10='$usuario' and p455w0rd = md5('$pass');";
$mysqli = new mysqli ("localhost", "root", "", "usu");
$resultado = $mysqli->($sql);
$resp=0
while ($row = mysqli_fetch_array($resp) {
	$resp = $row[0];
}
if ($resp == 1) {
	echo "entro"
}
else{
	echo "usuario y/o contraseña invalidos"
}



?>