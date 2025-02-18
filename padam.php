<!--memadam rekod barang-->
<?php
include("config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}
 
$query = mysqli_query($sambungan, "DELETE FROM barang WHERE id = '".$id."'");
header("location:barang.php");
?>