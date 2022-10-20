
<!DOCTYPE html>
<html>
<head>
  <title>Add Items</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
  <style>
    * {
    margin: 0px;
    padding: 0px;
  }
  body {
    font-size: 120%;
    background-image: url("https://i.pinimg.com/564x/cc/bb/e7/ccbbe712f6ca6c391241e70e224a39a3.jpg");
    
  }
  
  .header {
    width: 30%;
    margin: 50px auto 0px;
    color: black;
    background: #3498DB;
    text-align: center;
    border: 1px solid black;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    color:black;
    border-color: solid black;
    border-width: 50px;
    background-color: rgba(0,0,0,0.0);
    border-radius: 0px 0px 10px 10px;
    border: 1px solid black;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: black;
    background: #3498DB;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 92%; 
    margin: 0px auto; 
    padding: 10px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
  }
  .success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }
  
  </style>
  <div class="header">
    <h2>Add Items</h2>
  </div>
  <div class="reg">
  <form method="post" action="insertitems.php" action="login.php">
   

    <div class="input-group">
      <label>ProductID</label>
      <input type="text" name="productID" placeholder="Enter the product ID" required>
    </div>

    <div class="input-group">
      <label>Name</label>
      <input type="text" name="Name" placeholder="Enter your the product name" required>
    </div>

    <div class="input-group">
      <label>price</label>
      <input type="number" name="price" placeholder="Enter the product price" required>
    </div>

    

   

    
    <div class="input-group">
      
      <button type="submit"  class="btn" name="reg_user">Register</button>
    
    </div>
    
  </form>
</div>
</body>
</html>