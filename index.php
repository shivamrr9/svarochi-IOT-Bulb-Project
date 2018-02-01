<!DOCTYPE html>
<html lang="en">
<head>
  <title>Svarochi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('10.jpg');background-size:cover;background-repeat:no-repeat;">
<div style="margin-left: 0px;padding-left: 0px;" class="container">
  <div class="row">
    <div class="col-md-3"><br>
      <img style="height:60%;width:45%;margin-left: 10px;" src="png.png" />
    </div>
  </div>
</div>
<br>
<hr style="margin-top:0px;border:2px solid white;"></hr>
<div style="height:130px;width:100%;">
   <div class="container">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3 style="color:white;">Device Name:</h3>
  <h3 style="color:white;">Device IP:</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
   </div>
  

</div>
<hr style="border: 4px solid white;"></hr>
<div class="container">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<h3 style="text-align:center;color:white;"><u>LOGS</u></h3><br>
<h4 style="color:white;">Power : </h4>
<h4 id="status"></h4>
<h4 style="color:white;">Brightness : </h4>
 
</div>
<div class="col-md-4">
</div>
</div>
  </div>

</body>
</html>
<script type="text/javascript">
  function getData()
  {
  $.ajax({url: "getData.php", success: function(result){
     //   $("#div1").html(result);
   console.log('Result'+result);
   if(result == 1)
   {
   $('#status').html('ON');
   }
   else
   {
   $('#status').html('OFF');
   }
    }});
  setTimeout(getData, 1000);
  }
  getData();
</script>