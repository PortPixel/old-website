<!DOCTYPE html>
<html>
  <head>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="main-without-headercss.css">
    <title>LifesAnIllusion.com</title>
    <link rel="icon" href="favicon.ico" />
  </head>
  
  <body>

<style>
* {
margin: 0px;
padding: 0px;
}


.footer-left{
	float: left;
}






/* The search form */

.searchbarnav form{
	position: relative;
}

.searchbarnav form input{
	display: block;
	border-radius: 3px;
	box-sizing: border-box;
	background-color:  #d9d9d9;
	box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;

	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #000000;

	width: 500px;
	padding: 18px 50px 18px 18px;
}

.searchbarnav form input:focus{
	outline: none;
}

/* Changing the placeholder color */

.searchbarnav form input::-webkit-input-placeholder {
	color:  #000000;
}

.searchbarnav form input::-moz-placeholder {
	opacity: 1;
	color:  #5c666b;
}

.searchbarnav form input:-ms-input-placeholder{
	color:  #5c666b;
}

/* The magnify glass icon */

.searchbarnav form i{
	width: 18px;
	height: 18px;
	position: absolute;
	top: 16px;
	right: 18px;

	color: #d1d2d2;
	font-size: 18px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 1000px) {

	.searchbarnav form input{
		width: 300px;
	}

}

@media (max-width: 800px) {

	.searchbarnav{
		padding: 30px;
		text-align: center;
		font: bold 14px sans-serif;
	}



	.searchbarnav,


	.searchbarnav {
		margin-bottom: 20px;
		padding-left:70%;
	}

	.searchbarnav form input{
		width: 100%;
	}

}

.topnav {
height:90px;
background:#488bf4;
}
.topnav img{
padding-top: 10px;
padding-left: 20%;
}
.navbar li {
display: inline;
}
.navbar {
background-color:#f2f2f2;
height: 44px;
}
.clearfix:after {
display:inline;
clear:both;
}
.menu-wrap {
width:100%;
box-shadow:0px 1px 3px rgba(0,0,0,0.2);
}
.menu {
width:100%;
margin:0px auto;
}
.menu li {
margin:0px;
list-style:none;
font-family: 'Shift', sans-serif;
}
.menu a {
transition:all linear 0.15s;
color:#919191;
}
.menu li:hover > a, .menu .current-item > a {
text-decoration:none;
color:f2f2f2;
}
.menu .arrow {
font-size:11px;
line-height:0%;
}
.menu > ul > li {
float:left;
display:inline-block;
position:relative;
font-size:19px;
}
.menu > ul > li > a {
padding:10px 40px;
display:inline-block;
text-shadow:0px 1px 0px rgba(0,0,0,0.4);
}
.menu > ul > li:hover > a, .menu > ul > .current-item > a {
background:#e6e6e6;
}
.menu li:hover .sub-menu {
z-index:1;
opacity:1;
}
.sub-menu {
width:160%;
padding:5px 0px;
position:absolute;
top:100%;
left:0px;
z-index:-1;
opacity:0;
transition:opacity linear 0.15s;
box-shadow:0px 2px 3px rgba(0,0,0,0.2);
background:#e6e6e6;
}
.sub-menu li {
display:block;
font-size:16px;
}
.sub-menu li a {
padding:10px 30px;
display:block;
}
.sub-menu li a:hover, .sub-menu .current-item a {
background:#d9d9d9;
}
</style>

<div class="topnav">
<div>
<a href="/"><img src="images/logo.svg" alt="Logo" style="width:200px;height:60px;"></a>
</div>
<div class="searchbarnav">
<form method="get" action="/search">
<input placeholder="Search" name="q" />
<i class="fa fa-search"></i>
</form>
</div>
</div>
<div class="navbar">
<div class="container">
<div class="menu-wrap">
<nav class="menu">
<ul class="clearfix">
<li><a href="home.html" style="text-decoration: none">Home</a></li>
<li><a href="games.html" style="text-decoration: none" >Games <span class="arrow">&#9660;</span></a>
<ul class="sub-menu">
<li><a href="games.html" style="text-decoration: none">Games Home</a></li>
<li><a href="games/playgames.html" style="text-decoration: none">Play games</a></li>
<li><a href="tutorials/scratch/home.html" style="text-decoration: none">Game tutorials</a></li>
<li><a href="#" style="text-decoration: none">Game reviews</a></li>
</ul>
</li>
<li><a href="tutorials.html" style="text-decoration: none" >Tutorials <span class="arrow">&#9660;</span></a>
<ul class="sub-menu">
<li><a href="tutorials.html" style="text-decoration: none">Tutorials Home</a></li>
<li><a href="tutorials/scratch/home.html" style="text-decoration: none">Game tutorials</a></li>
<li><a href="tutorials/website/home.html" style="text-decoration: none">Website tutorials</a></li>
</ul>
</li>
<li><a href="#" style="text-decoration: none">Reviews</a></li>
</ul>
</nav>
</div>
<p>&nbsp;</p>
</div>
</div>


<div class="jumbotron">
      <div class="container">
    
        <a href="home.html"><img src="logo.svg" alt="Logo" style="width:150px;height:150px;"></a>
        <h1>LifesAnIllusion.com</h1>
    
        &nbsp
        <p>Your home for tutorials, games and reviews</p>
      </div>
      </div>

     


    <div class="learn-more">
	  <div>
		<div>
	      <div>
			<h3>Games</h3>
			<p>Play a range of free games</p>
			<p><a href="games.html">Games home</a></p>
	      </div>
		  <div>
			<h3>Tutorials</h3>
			<p>Read tutorials on everything from creating games using Scratch to creating a webiste.</p>
			<p><a href="tutorials.html">Tutorials Home</a></p>
                        <p><a href="tutorials/scratch/home.html">Scratch</a></p>
                        <p><a href="tutorials/websites/home.html">Websites</a></p>
		  </div>
		  <div>
			<h3>Reviews</h3>
			<p>Wondering if a game is worth playing? Check out our reviews first.</p>
			<p><a href="#">Reviews Home</a></p>
		  </div>
	    </div>
	  </div>
	</div>
  </body>


<?php include '/footer.html';?>

</html>