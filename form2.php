<?php
  require 'DbConnection.php';
  $pdo = DbConnection::make();
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $subjects = implode(',',$_POST['subjects']);
    $city = $_POST['city'];
    $query = "INSERT INTO Stduent_data(name,gender,subjects,city) VALUES (?,?,?,?)";
    $statement =$pdo->prepare($query);
    if($statement->execute([$name,$gender,$subjects,$city])){
      echo'Data Entered Successfully';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    
  
    <style>
   
    @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100&family=Manrope:wght@300&family=Open+Sans&family=Roboto:wght@100&display=swap');
      body {
        background-color: rgb(150, 233, 242);
        font-family: 'Barlow Condensed', sans-serif;
      }

      .card {
        background-color: rgb(150, 133, 242);
       
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 700px;
        margin: auto;
        margin-top: 20px;
        text-align: center;
        padding: 20px;
      }

      .title {
        color:pink;
        font-size: 20px;
        margin-bottom: 20px;
        font-family: 'Manrope', sans-serif;
      }

      button {
        width: 50%;
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
                
        font-size: 18px;
        margin-top: 20px;
      }

      label {
        display: block;
        margin-top: 10px;
        color: white;
      }

      .form-group {
        text-align: center;
        padding: 10px;
        margin: 0 auto;
        font-size: 20px;
      }

      .radio-group,
      .checkbox-group {
        display: flex;
        align-items: center;
        margin-top: 10px;
        margin: 0 auto;
        justify-content: center;
      }

      input[type="text"] {
        width: 50%; 
        padding: 5px;
        margin: 0 auto;
      }
      

      select {
        width: 50%;
        padding: 5px;
        margin: 0 auto;
      }

      a {
        text-decoration: none;
        font-size: 22px;
        color: white;
      }

      button:hover,
      a:hover {
        opacity: 0.7;
      }
    </style>
  </head>
  <body>
    <div class="card">
      <h1 style="color:white">FORM</h1>
      <p class="title">Enter Your Details</p>
      <form method="post" >
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label>Gender</label>
          <div class="radio-group">
            <input type="radio" name="gender" value="Male" id="male">
            <label for="Male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="Female">Female</label>
          </div>
        </div>
        <div class="form-group">
          <label>Subjects</label>
          <div class="checkbox-group">
            <input type="checkbox" name="subjects[]" value="HT" id="HT">
            <label for="HT">History</label>
            <input type="checkbox" name="subjects[]" value="PHY" id="PHY">
            <label for="PHY">Physics</label>
            <input type="checkbox" name="subjects[]" value="TEC" id="TEC">
            <label for="TEC">Technology</label>
          </div>
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <select name="city" id="city">
            <option value="Santiago">Santiago</option>
            <option value="Frankfurt">Frankfurt</option>
            <option value="Dublin">Dublin</option>
            <option value="Brighton">Brighton</option>
          </select>
        </div>
        <p><button type="submit">Submit</button></p>
        
      </form>
      
      <a href="table.php"><button type="seek">See Data</button></a>
    </div>
  </body>
</html>

