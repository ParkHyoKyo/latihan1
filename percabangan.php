<?php 

$ohayo = $_POST['nama_depan'];
$ohayogozaimasu = $_POST['nama_belakang'];


if($ohayo == "A"){
    echo "Sangat Baik"."<br>";
}elseif ($ohayo == "B") {
    echo "Baik"."<br>";
}elseif ($ohayo == "C") {
    echo "Cukup"."<br>";
}else{
    echo "Rungkad";
}

if($ohayogozaimasu == "A"){
    echo "Sangat Baik";
}elseif ($ohayogozaimasu == "B") {
    echo "Baik";
}elseif ($ohayogozaimasu == "C") {
    echo "Cukup";
}else{
    echo "Rungkad";
}





 ?>