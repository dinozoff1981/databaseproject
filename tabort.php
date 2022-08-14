<?php
if (isset($_GET["id"])){

$id=$_GET["id"];

$servername="localhost";
$username="root";
$password="";
$database="friends";

$connection=new mysqli($servername,$username,$password,$database);

$sql="DELETE FROM kompisar WHERE idnummer=$id";
$connection->query($sql);

}
header("location:/Friends/index.php");
exit;





?>