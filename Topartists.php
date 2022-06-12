

<html>
    <head><title>navigation bar</title>
        <link rel="stylesheet" type="text/css" href="homepage.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
    </head>
   
    <body>
    
        <div id="main">
            <nav>
                <ul>
                    <li><a href="homepage.php">HOME</a></li>  
                     <li><a href="Topartists.php">Top Artists</a></li>    
                </ul>  
            </nav>
            <a href="artists.php"> <input type="BUTTON" VALUE="+ Add Artists"> </a>          
             <center>
        <h3 style="color: darkcyan;font-size: 40px;font-style: oblique;">Top 10 Artists </h3>
        <table border="3px" style="width:1050px; line-height: 60px; background: white;">
            <tr border="2px" style="background: #0008;color: white;">
                <th>Artists</th>
              
                <th>Date of Birth</th>
                <th>Song</th>
                
                         
        </tr>
           <?php
           session_start();
           $con=mysqli_connect("localhost","root","","songapp");
           //top 10 songs 
           $query="select * from artists where inner join addsongs1 on aname order by aname asc";
           $result= mysqli_query($con, $query);
           while($row= mysqli_fetch_array($result))
                {
                    ?>
                <tr border="2px">
                     <td><?php echo $row['aname']?></td>
                    <td><?php echo $row['dob']?></td>
                    <td><?php echo $row['song']?></td>
                    
                                        
                </tr>
               
                <?php
                
                }
                ?>
               
               
                </table>
                         
        
   </center>
        </div>
        
        
    </body>
</html>
