<?php
require_once('Teacher.php');
//intantiating a new teatcher
$t = new Teacher("Kim","Vestergård","Mogensen",null);
$u = new Teacher("Martin","Edwin","Nielsen",1000);

//Write data for the new teacher
echo $t->__toString();
echo ("\n************\n");
echo $u->__toString();

//set salary
$t->setSalary(0);
$u->setSalary(2000);

echo "test ends\n"
?>