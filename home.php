<?php
include "navbar.php";
?>
<html>
    <head>
        <title>Spice City</title>
</head>

<style>
    *{
    margin:0px;
    padding:0px;
}
/*Header Styling*/

#top{
    color:rgb(245, 10, 10);
    text-align:center;
    font-size:46px;
    font-family: 'Ubuntu Mono', monospace;
}
#top1{
    text-align:center;
    color:black;
    font-size:21px;
    font-family: 'Ubuntu Mono', monospace;
}
/* Navigation bar styling*/

/*Navbar image styling*/
#navbar img{
    display:block;
    width: 50px;
    height:50px;
    margin:auto;
    margin-bottom: 3px;
}

/*Navbar Functionality*/
#navbar{
    display:flex;
    flex-direction: column;
    background-color: gray;
    height: 14vh;
    width: 100vw;
    font-family: 'Ubuntu Mono', monospace;
    margin-top:10px;
   border: 2px solid black;
   border-radius:15px;
}


/*Navbar content functionality*/
#navcontent{
    display: flex;
    justify-content: center;
}


/*Navbar content styling*/
ul li{
    list-style: none;
    margin: 15px;
    border-radius: 20px;
}
ul li a{
    padding: 1px;
    color:white;
    text-decoration: none;
    border-radius:10px;
}
ul li a:hover{
    background-color: red;
    border-radius: 10px;
}

/* website background image designing */
#container1{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100vw;
    height:63vh;
}

/*Setting the background image using before pseudo selector*/ 
#container1::before{
    content:'';
    background: url("assets/bg.jpg") no-repeat center center/cover;
    width: 100vw;
    height:59vh;
    position: absolute;
    top:0px;
    left: 0px;
    font-family: 'Ubuntu Mono', monospace;
    margin-right:45px;
    font-weight: bold;
    z-index: -1;
    opacity: 0.89;
    border: 2px solid black;
    border-bottom-left-radius: 100px;
}

#row1{
   color: black;
    font-weight:bold;
    font-size: 2rem;
    text-align: center;
    margin-top: 35px;
}
/*Button Styling*/
.btn{
    margin-top:15px;
    border: 3px solid white;
    border-radius:15px;
    background-color:yellow;
    font-size:20px;
    font-weight: bold;
    font-family: 'Ubuntu Mono', monospace;
}
.btn:hover{
    cursor: pointer;
    background-color: red;
}


#container3{
    display: flex;
    justify-content: space-evenly;
}
#row2{
    width:24vw;
    height:21vh;
    box-shadow: 2px 7px 16px 19px;
     margin-top:100px;
     margin-bottom: 51px;
     display: flex;
    justify-content: center;
     align-items: flex-end;
     position: relative;
     margin-right: 0px;
	 margin-left: 70px;
     border-radius: 40px;
}
#row2::before{
    content: '';
    background: url('assets/menu-burger.jpg') no-repeat center center/cover;
    position: absolute;
    top: 0px;
    left:0px;
    width: 24vw;
    height:21vh;
    z-index: -1;
    border-radius: 40px;
}
#row3{
    position: relative;
    width: 24vw;
    height:21vh;
    display: flex;
    justify-content: center;
     align-items: flex-end;
     box-shadow: 2px 7px 16px 19px;
     margin-top:100px;
     margin-bottom: 51px;
     
     margin-left: 50px;
     border-radius: 40px;
}
#row3::before{
    content: '';
    background: url('assets/pizza.jpg') no-repeat center center/cover;
    position: absolute;
    top:0px;
    left:0px;
    width: 24vw;
    height:21vh;
    z-index: -1;
    border-radius: 40px;
}

#top3{
    text-align: center;
    color:red;
    font-family: 'Ubuntu Mono', monospace;
}
#container4{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    margin: 41px;
}  
#row4{
    width: 29vw;
    height: 360px;
    border: 2px solid black;
    background:url('assets/fosyyyy.jpg') no-repeat center center/cover; 
    display: flex;
    justify-content:center;
    align-items:flex-end;
    border-radius: 15px;
}
#row5{
    width: 29vw;
    height: 360px;
    border: 2px solid black;
    background:url('assets/menu-pizza.jpg') no-repeat center center/cover;
    display: flex;
    justify-content:center;
    align-items:flex-end;
    border-radius: 15px;
}
#row6{
    width: 30vw;
    height: 360px;
    border: 2px solid black;
    background:url('assets/burger.jpg') no-repeat center center/cover;
    display: flex;
    justify-content:center;
    align-items:flex-end;
    border-radius: 15px;
}
/*Designing the footer*/
footer{
    text-align: center;
}
/*Designing of Contact Us*/
#ContactUs{
    width:100vw;
    height:100vh;
    display:flex;
    flex-direction: column;
    align-items: center;
    background-color: gray;
}
.form-shape input, .form-shape select, .form-shape textarea{
   width: 92%;
   padding: 0.5rem;
}
/*Changing the color of placeholder*/
::placeholder{                  
    color:gray;
}
/*Making the webpage responsive using media queries*/
@media only screen and (max-width:1131px){
    #row4{
        width: 42vw;
    }
    #row5{
        width:45vw;
    }
    #row6{
        margin-top: 20px;
        width:90vw;
    }
}
@media only screen and (min-width:600px) and (max-width:781px)
{
    #row4{
        width:84vw;
        margin: auto;
        margin-left: 22px;
    }
    #row5{
        
        width:84vw;
        margin: auto;
        margin-top: 20px;
        margin-left: 22px;
    }
    #row6{
        width:84vw;
        margin: auto;
        margin-top: 20px;
        margin-left: 22px;
    }
}
@media only screen and (max-width:600px){
    #row4{
        width:78vw;
        margin: auto;
        margin-left: 3px;
    }
    #row5{
        
        width:78vw;
        margin: auto;
        margin-top: 20px;
        margin-left: 3px;
    }
    #row6{
        width:78vw;
        margin: auto;
        margin-top: 20px;
        margin-left: 3px;
    }
}
@media only screen and (min-height:1000px){
    #navbar{
        height:10vh;
    }
    #container1::before{
        height:39vh;
    }
    #container1{
        height:44vh
    }
}


    </style>
<body>
	<header>
		<h1 id="top">Spice</h1>
		<h1 id="top1">City</h1>
	</header>
	<hr>
	<div id="container1">
		<div id="row1">
			Welcome to Spice City!!!
		</div>
		
		<div id="container3">
			<div id="row2">
			</div>
			<div id="row3">	
			</div>
		</div>
	</div>
	<hr>
	<h1 id="top3">Featured Products</h1>
	<div id="container4">
		<div id="row4">
			
		</div>
		<div id="row5">
			
		</div>
		<div id="row6">
			
		</div>
	</div>
	<footer>Copyright © 2023-2024 OnlineFoodShop.
		All Rights are reserved</footer>
</body>
</html>