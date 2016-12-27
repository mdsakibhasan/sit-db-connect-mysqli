<?php 
$connection = new mysqli('localhost','root','','sit21');
$query = $connection->query("SELECT id,name,roll FROM tbl_student;");
while ($data = $query->fetch_assoc()) {
	echo "----------------------"."</br>";
	echo "ID :".$data['id']."</br>";
	echo "NAME :".$data['name']."</br>";
	echo "ROLL :".$data['roll']."</br>";
}












