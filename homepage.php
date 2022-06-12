

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
             <a href="addsongs1.php"> <input type="BUTTON" VALUE="+ Add Song"> </a>          
             <center>
        <h3 style="color: darkcyan;font-size: 40px;font-style: oblique;">Top 10 Songs </h3>
        <table border="3px" style="width:1050px; line-height: 60px; background: white;">
            <tr border="2px">
                <th>Artwork</th>
                <th>Song</th>
                <th>Date of Release </th>
                <th>Artists</th>
                <th>Rate</th>
                         
        </tr>
           <?php
           session_start();
           $con=mysqli_connect("localhost","root","","songapp");
           //top 10 songs 
           $query="select * from addsongs1 order by rate asc";
           $result= mysqli_query($con, $query);
           while($row= mysqli_fetch_array($result))
                {
                    ?>
                <tr border="2px">
                     <td><?php echo $row['songname']?></td>
                    <td><?php echo $row['dateofrelease']?></td>
                    <td><?php echo $row['file1']?></td>
                    <td><?php echo $row['NEW']?></td>
                    <td><?php echo $row['rate']
                           ?></td>
                    <th><span value="rate"class="fa fa-star"></span>
                    <span value="rate"class="fa fa-star "></span>
                    <span value="rate"class="fa fa-star "></span>
                    <span value="rate"class="fa fa-star "></span>
                    <span value="rate"class="fa fa-star "></span></th>
                                        
                </tr>
               
                <?php
                
                }
                ?>
               
               
                </table>
                         
        
   </center>
        </div>
        
        
    </body>
</html>
