<!doctype html>
<html>
    <head>
       <!-- <title>FOODPRINT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'> -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FOODPRINT</title>  
        <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="style.css" rel="stylesheet">
        
      
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
      <!-- HEADER -->
  <div class="flex-wrapper">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand">FOODPRINT</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/~s1884908/fatfree/foodprint/">HOME</a></li>
              <li><a href="/~s1884908/fatfree/foodprint/RecipesByCusine.php">RECIPES BY CUSINE</a></li>
              <li><a href="/~s1884908/fatfree/foodprint/RecipesByNutrients.php">RECIPES BY NUTRIENTS</a></li>
              <li><a href="/~s1884908/fatfree/FFF-SimpleExample/feedform">FEEDBACK</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END OF HEADER -->
<!-- 
A very simple response View template:
just echoes what the input data were.
The parameter "formData" is an array that
has been set as a global F3 variable, using $f3->set().
 -->
 <body>
<h1> Thank you for your invaluable feedback!</h1>
<!-- <h1>Thanks for your data, <?= $formData['name'] ?> ...</h1> -->
<!-- <p> Your colour was <?= $formData['colour'] ?> </p> -->
<hr />
<!-- <a href="<?= $BASE ?>/dataView">Show all data</a> -->

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
    p{
        color: #C0C0C0;
      } 
    </style>
    
    <footer>          
      <br><br>
      <p style="text-align: center">&copy; FOODPRINT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/~s1884908/fatfree/foodprint/WebDesignReport.pdf">Click Here for the report.</a></p> 
    </footer>
</body>
</div>
<!-- END OF FOOTER -->



</html>
