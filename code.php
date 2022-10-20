<!DOCTYPE html>
<html>
<head>
  <title>Scan items</title>
</head>
<body>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="html5-qrcode.min.js"></script>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 0 10px;


}*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 0 10px;


}*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 0 10px;


}
  .result{
    background-color: green;
    color:#fff;
    padding:20px;
    align-items: center;
      align-content: center;
  }
  .row{
    display:flex;
    align-content: center;
    align-items: center;

  }
  body{
    align-items: center;
    background-image: url("https://w0.peakpx.com/wallpaper/591/889/HD-wallpaper-white-aesthetic-lines-background-white-aesthetic.jpg");
  background-repeat: no-repeat;
  background-size: 3000px 1000px;
  }
  .reader{
    align-items: center;
      align-content: center;

  }
  .row{
     align-items: center;
      align-content: center;
  }
  form{
    align-items: center;
      align-content: center;
  }
</style>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
     <p> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#2471A3" class="bi bi-person" viewBox="0 0 16 16">
     <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
     </svg></p>

      <a class="navbar-brand" href="#">Welcome Cynthia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact us</a>
          </li>
        </ul>
        <form class="nav-item" >
          
          <button class="btn btn-outline-success" href="index.php">Log out</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<div class="row">
  <div class="col">
    <div style="width:500px;" id="reader"></div>
  </div>
  <div class="col" style="padding:200px;">
    <div id="result"> b</div>
  </div>
</div>

<form action="fetch.php" method="POST">
  <input type="text" name="someInput" class="someInput" id="someInput" placeholder="Result Here">

<script type="text/javascript">
function onScanSuccess(qrCodeMessage) {
    document.getElementById('result').value = '<span class="result" id="result" name="result">'+qrCodeMessage+'</span>';
    document.getElementById('someInput').value = qrCodeMessage;
}
console.log (document.getElementById('result').innerHTML);

function onScanError(errorMessage) {
  //handle scan error
}



var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess, onScanError);


</script>

<input type="submit" value="Add to cart">
</form>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="MQYFNHCJRZXES">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>>