<?php
session_start();
if(!isset($_SESSION["u"])){
    header("location:index.php");
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>India 1st cook shopping in online </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="font/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="">

	
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
	<script src="menu.js"></script>
    	<link href="css/menu.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    

<style>
table tr td{padding: 10px;}  
</style>

</head>
<body>
    
 <nav class ="navbar navbar-inverse ">

 
     <div class="container-fluid" style="margin-top:5px;">
        <div class="row">
           <div class="col-sm-4">
            <ul class="list-inline  top-v1-data">
                <li>
                <a class="list-group-item" href="nirajindia45@gmail.com">cookinfocom@gmail.com</a>
                    </li>
                <li>
                 <a  class="list-group-item" href="#">18000000000</a>
                    </li>
                  </ul>
        </div>
            <div class="col-sm-5">
                <ul class="list-inline  top-v1-data">
               
              <li>
                <a  class="list-group-item" href="#">PAY ONLINE</a>
                    </li>
                    <li style="width:200px;"><input class="form-control" id="search" title="Easy to find out" type="text" placeholder="search" size="30" maxlength="255"></li>
                       <li width:50px;> <button class="btn btn-success" id="search_btn">Search</button></li>
                  </ul>
        </div>
              <div class="col-sm-3">
   
                  <ul class="nav navbar-nav navbar-right">
         <li class="active"> <a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carts<span class="badge">0</span></a>
                
                <div class="dropdown-menu" style="width:500px;">
    
        <div class="panel panel-info">
                    <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-3">Sl.no</div>
                         <div class="col-md-3">Name</div>
                         <div class="col-md-3">Image</div>
                         <div class="col-md-3">Price</div>
                        
                 </div>
            </div>
                    
          <div class="panel-body">
              <div id="cart_food">
            <!-- <div class="row">
                    <div class="col-md-3">Sl.no</div>
                         <div class="col-md-3">Name</div>
                         <div class="col-md-3">Image</div>
                         <div class="col-md-3">Price</div>
                         </div>-->
                  </div>
            </div>

        <div class="panel-footer">
              </div>
            </div>
                    </div>
            
    
                        </li>
<li  class="dropdown"> <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span><?php echo "Hi,&nbsp;".$_SESSION["name"]; ?></a>
    
    
    
    
    <ul class="dropdown-menu">
	

   <li> <a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
        <li><a href="#">change password</a></li>
        <li><a href="logout.php">Logout</a></li>

</ul>
    
    </li>	
</ul>

            
            
</div>
</div>
</div>
</nav>
    <div class="clear"></div>    
        <div class="container-fluid">
            <div class="row">
            <div class="col-sm-2">
                <img src="images/cooklogo.png"/>
                </div>
                <div class="col-sm-10">          
<h3>YOUR PROBLEM IS OUR PROBLEM</h3>
<p>  India 1st Online cooking shopping website in your home Town <br> distance is not matter <br> fast delivery  in your home   </p>
                </div>
            </div>
        </div>
    
    
    
    
    
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand glyphicon glyphicon-home">cooking shop</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#niraj">
					<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>


				</button>
			</div>
			<div class="collapse navbar-collapse" id="niraj">
			<ul class="nav navbar-nav">
			<li> <a href=""><span class=""></span>Home</a></li>
		
	

	
  </ul>
</div></div>
</nav>

<p></br></p>
<p></br></p>
<p></br></p>
<div class="container-fluid">
<div class="row">
  
<div class="col-md-2"></div>
<div class="col-md-8">
  <div class="panel panel-default">
    <div class="panel panel heading">
      
    </div>
    <div class="panel-body">
      <h1> Customer Details Order</h1>
      <hr/>
<div class="row">
  
<div class="col-md-6">
<img src="images/armour-food.jpg" class="img-thumbnail"/>
</div>
<div class="col-md-6">
  
<table>
  

  <tr><td>Food Name</td><td><b>Armour</b></td></tr>
  <tr><td>Food Price</td><td><b>Rs.30</b></td></tr>
  <tr><td>Quality</td><td><b>3</b></td></tr>
  <tr><td>Payment</td><td><b>Complated</b></td></tr>
  <tr><td>Tresaction </td><td><b>NRI000021324784783</b></td></tr>

  
</table>

</div>
</div>



    </div>
    <div class="panel-footer"></div>
  </div>

</div>
<div class="col-md-2"></div>


</div>

  </div>
    
                    
        
</body>
</html>