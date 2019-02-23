<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food App</title>  
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet">
  

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<!--<div class="header" id="header">
    <a href="#default" class="logo">CompanyLogo</a>
    <div class="header-right">
      <a class="active" href="#home">Home</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
  </div>-->

  <!-- HEADER -->
  <div class="flex-wrapper">
  <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand">GreatFoods!</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="foodapp.php">HOME</a></li>
            <li><a href="RecipesByCusine.php">RECIPIES BY CUSINE</a></li>
            <li><a href="RecipesByNutrients.php">RECIPIES BY NUTRIENTS</a></li>
            <li><a href="/~s1884908/fatfree/FFF-SimpleExample/feedform">FEEDBACK FORM</a></li>
            <!--<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END OF HEADER -->

<body onload="getFoodByCusine()">

  <div id="root"></div>
<script src="script.js"></script>
  

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>

 <!-- FOOTER -->
  <style>
      /* Add a dark background color to the footer */
      footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
        display: flex;
        height: 60px;
        /* position:sticky;
        bottom:0;
        width:100%;
        height:60px;
        margin-top: -100px;
        clear: both; */
        /* background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px; */
        /* height: 4rem; */
      }
      
      footer a {
        color: #f5f5f5;
      }
      
      footer a:hover {
        color: #777;
        text-decoration: none;
      }
      </style>
      
      <footer>          
        <br><br>
        <p style="text-align: center">&copy; GreatFoods ! </p> 
      </footer>
</body>
</div>
<!-- END OF FOOTER -->



</html>
