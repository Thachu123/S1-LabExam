<html>
    <head>
        <style>
            .tdc{
                background-color:#c7ccbe;
            }
            label
            {
                font-size:20px;
                font-style:oblique;
                fo
            }
        </style>
    </head>
    <title>patient view</title>
    <body>
        <table border="" width="800px" height="200px" cellpadding="2" align="center" cellspacing='2'>
            <caption><h1>Patient Information</h1></caption>
            <tr>
            <td class='tdc'><label  >Patient Name</label></td>
            <td><label>Doctor's name</label></td>       
            <td class='tdc'><label>Room No</label></td>
            </tr>
 <?php
  $cond=new mysqli("localhost","root","","exam");
  $dis="SELECT pname,dname,rno FROM hospital";
  $d=mysqli_query($cond,$dis);
  while($f=mysqli_fetch_array($d))
  {
      ?>
            <tr>
                <td class='tdc'><?php echo $f["pname"];?></td>
                <td><?php echo $f["dname"];?></td>
                <td class='tdc'><?php echo $f["rno"];?></td>
            </tr>           
  <?php }?>
        </table>
    </body></html>
 