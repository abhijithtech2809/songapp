

<?php
session_start();
$con=mysqli_connect("localhost","root","","songapp");
if(isset($_POST['submit']))
{
        $aname=$_POST['aname'];
        $dob=$_POST['dob'];  
        $bio=$_POST['bio'];
       
              
if ($aname!=$aname)
{
    $query="select * from artists where aname='$aname'";
    $query_run= mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
         echo '<script type="text/javascript">alert("Artist name already taken")</script>';
    }
    else
    {
    $query="insert into artists(aname,dob,bio)"
        . "values('$aname','$dob','$bio')";
        $query_run=mysqli_query($con, $query);
      if ($query_run)
      {
         
      $_SESSION['aname']=$aname;
     $_SESSION['dob']=$dob;  
       $_SESSION['bio']=$bio;
     
          header('location:homepage.php');  
      }
      else  
      {
             echo '<script type="text/javascript">alert("Failed to add")</script>';
      }
    }
}
else{
echo '<script type="text/javascript">alert("check once")</script>';
  }
}
?>