<html>
    <head>
        <title>Patient Register form</title>
    </head>
        <body bgcolor="#ffe6e6">
<form name="Registration" action=" " method="POST">
    <h1 align="center">
        Patient Registration Form
    </h1>
<br>
<b>Patient Name:</b>
<input type="text" name="pname" maxlength="15" required="">
<br><br>

<b>Gender:</b><br>
<input type="radio" name="gender" value="m">Male<br>
<input type="radio" name="gender" value="f">Female<br>
<input type="radio" name="gender" value="o">Others<br>
<br><br>

<b>Age:</b>
<input type="number" name="age" required=""><br><br>

<b>Address:</b>
<textarea cols="40" rows="5" name="address" required="">
</textarea><br><br>

<b>Phone</b>
<input type="text" name="phone" maxlength="10" pattern="[6789][0-9]{9}" required="">
<br><br>

<b>Doctor's Name:</b>
<input type="text" name=dname maxlength="15" id="dname" required="">
<br><br>

<b>Admission Date:</b>
<input type="date" name="admitdate" required="">
<br><br>

<b>Room No:</b>
<input type="number" name="rno" required="">
<br><br>


<button onclick="Validation()" value="submit" name="submit">Register</button>
<a href='view.php'>Display</a>
</form>

<script>
    function Validation()
    {
        var dname=document.getElementById("dname").value;
        if(dname==" ")
        {
            window.alert("Please enter the Doctor's name");
            document.getElementById("dname").focus();
            return false;
        }
    }
</script>
</body>
</html>


<?php
 if(isset($_POST["submit"]))
 {
     $cond=new mysqli("localhost","root","","exam");
     $pname=$_POST["pname"];
     $gender=$_POST["gender"];
     $age=$_POST["age"];
     $address=$_POST["address"];
     $phone=$_POST["phone"];
     $dname=$_POST["dname"];
     $admitdate=$_POST["admitdate"];
     $rno=$_POST["rno"];
     $insert="INSERT INTO hospital(pname,gender,age,address,phone,dname,admdate,rno)
            VALUES('$pname','$gender','$age','$address','$phone','$dname','$admitdate','$rno')";
     //echo $insert;
     if(mysqli_query($cond,$insert))
     {
     echo "<script>alert('Successfully inserted');</script>";
     }
 else {
     echo "<script>alert('Error in insertion');</script>";
     }
 } 
?>
