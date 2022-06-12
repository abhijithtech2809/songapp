

<?php
session_start();
$con=mysqli_connect("localhost","root","","songapp");
if(isset($_POST['submit']))
{
        $songname=$_POST['songname'];
        $datereleased=$_POST['datereleased'];          
        $file1= addslashes(file_get_contents($_FILES["imagep"]["tmp_name"]));
        //I have taken selesct name here to store values
        $artists=$_POST['artists'];
        $rate=$_POST['rate'];
       
       
if ($songname!=$songname)
{
    $query="select * from addsongs1 where songname='$songname'";
    $query_run= mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
         echo '<script type="text/javascript">alert("This song name is already exists")</script>';
    }
    else
    {
    $query="insert into addsongs1(songname,datereleased,file1,artists,rate)"
        . "values('$songname','$datereleased','$file1','$artists','$rate')";
        $query_run=mysqli_query($con, $query);
      if ($query_run)
      {
         
      $_SESSION['songname']=$songname;
     $_SESSION['datereleased']=$datereleased;  
       $_SESSION['$imagep']=$file1;
      $_SESSION['artists']=$artists;
       $rate=$_POST['rate'];
        
          header('location:homepage.php');  
      }
      else  
      {
             echo '<script type="text/javascript">alert("Failed to add")</script>';
      }
    }
}
else{
echo '<script type="text/javascript">alert("Its wrong try again")</script>';
  }
}
?>