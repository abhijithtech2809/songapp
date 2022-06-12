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
  margin-top: -26%;
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
    <form action="artistsbackend.php"  method="post" enctype="multipart/form-data">

<h1>Add Artists </h1>


<div class="container">
 
  <div class="row">
    <div class="input1">
      <label for="aname">Artist Name</label>
    </div>
    <div class="input2">
      <input type="text" id="aname" name="aname" placeholder="Artists name">
    </div>
  </div>
  <div class="row">
    <div class="input1">
      <label for="dateofbirth">Date of Birth</label>
    </div>
    <div class="input2">
        <input type="date" name="dob" style="width: 40%;
                     padding: 12px;
                     border: 1px solid #ccc;
                     border-radius: 4px;
                     resize: vertical;background: white">
    </div>
  </div>
  <div class="row">
    <div class="input1">
      <label for="dob">Bio</label>
    </div>
    <div class="input2">
        <textarea id="bio" name="bio" rows="4" cols="50"></textarea>
    </div>
  </div>
 
      
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


