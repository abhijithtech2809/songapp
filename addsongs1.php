<!DOCTYPE html>
<html>
<head>
<style>
    
body{
     
     background: linear-gradient(to top, #ffffcc 0%, #ffcc00 100%);
}

* {
  box-sizing: border-box;
 
}

input[type=text], select, textarea,file {
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  margin-right:  -275%;
  color: white;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right:  45%;
  margin-top: 08%;
}
input[type=button]{
  
    margin-top: -75%;
    font-size: 90%;
    color: white;
  
    margin-left: 85%;
    transform: translate(-64%,-50%);
   
    padding: 10px 60px;
    font-family: cursive;
    background: black;
}


input[type=submit]:hover {

  background-color: #45a049;
  
}

.container {
     width: 100%;
    max-width: 1200px;
    height:630px;
  border-radius: 5px;
  background-color:#0008 ;
  padding: 20px;
  
    
}

.input1 {
  float: left;
  width: 15%;
  margin-top: 6px;
}

.input2 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h1{
            color: black;
            font-family: sans-serif;
        font-size: 30px;
        margin-top: 05%;
        }


</style>
</head>

<body>
<center>
     <form action="addsongs1backend.php"  method="post" enctype="multipart/form-data">

<h1>Adding a new Song </h1>


<div class="container">
 
  <div class="row">
    <div class="input1">
      <label for="songname">Song Name</label>
    </div>
    <div class="input2">
      <input type="text" id="songname" name="songname" placeholder="Song name..">
    </div>
  </div>
  <div class="row">
    <div class="input1">
      <label for="datereleased">Date Released</label>
    </div>
    <div class="input2">
      <input type="text" id="datereleased" name="datereleased" placeholder="Date Released..">
    </div>
  </div>
  <div class="row">
    <div class="input1">
      <label for="image">Upload Image</label>
    </div>
    <div class="input2">
        <center>   <input type="file" name="imagep" style="width: 40%;
                     padding: 12px;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     resize: vertical;background: white"></center>
    </div>
  </div>
  <div class="row">
    <div class="input1">
      <label for="subject">Subject</label>
    </div>
    <div class="input2">
    <select Artist Name='artists'>  
            <option value="">--- Select ---</option>  
            <?  
                mysql_connect ("localhost","root","");  
                mysql_select_db ("songapp");  
                $select="company";  
                if (isset ($select)&&$select!=""){  
                $select=$_POST ['NEW'];  
            }  
            ?>  
            <?  
                $list=mysql_query("select * from addsongs1 order by id asc");  
            while($row_list=mysql_fetch_assoc($list)){  
                ?>  
                    <option value="<? echo $row_list['id']; ?>"<? if($row_list['id']==$select){ echo "selected"; } ?>>  
                                         <?echo $row_list['aname'];?>  
                    </option>  
                <?  
                }  
                ?>  
            </select>  
       
           
            


        
    </div>
      <a href="artists.php"> <input type="BUTTON" VALUE="+ Add Artist"> </a>   
  </div>
  <br>
 
  <div class="row">
      
       <input type="submit" value="Submit">
  </div>
  
</div>
     </form>
</center>


</body>
</html>


