<?php

$con=new mysqli("localhost","root","");
if($con->connect_error)
{
    echo "Cannot connect database";
}

$d=mysqli_query($con,"create database exam");
if($d==true)
{
    echo "Database created Successfully";
}
 else {
    echo "Database creation failed";
}

$f=new mysqli("localhost","root","","exam");
$e="create table hospital(pid int primary key not null auto_increment,pname varchar(20) not null,gender varchar not null,
age int not null,address varchar(50)not null,phone int(10) not null,dname varchar(20) not null,
admdate date,rno int not null)";
if(mysqli_query($f, $e)==TRUE)
{
    echo "Table created succefully";
}
$f->close();
?>