<?php
$conn=mysqli_connect('localhost','root','manojsat8','ninja_pizza');
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}
?>