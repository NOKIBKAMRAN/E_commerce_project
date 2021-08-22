<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customer Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


	<style>
	    .mySlides {
	        display: none;
	        transition: all 06s ease;
	    }
	    img {
	        vertical-align: middle;
	    }

	    /* Slideshow container */
	    .slideshow-container {
	        max-width: 1000px;
	        position: relative;
	        margin: auto;
	    }

	     
	     



	    /* The dots/bullets/indicators */
	    .dot {
	     
	        cursor : pointer ;
	        height: 2px;
	        width: 1px;
	        margin: 0 70px;
	        border-radius: 50%;
	        display: inline-block;
	        transition: background-color 0.6s ease;
	    }

	     

	 

	    

	    /* On smaller screens, decrease text size */
	    @media only screen and (max-width: 300px) {
	        .prev, .next,.text {font-size: 11px}
	    }
	    table{
	    	text-align: center;
	    }


		td{
		  text-align: left;
		  width: 50%;
		  font-size: 20px;
		  margin: 0 80px;

		}
		th{
			text-align: left;
		    width: 33%;
		    font-size: 40px;
		    margin: 0 60px;
		}
		td label {
			padding: 5px;
			font-weight: 0;

		}
        *{
	margin: 0;
	padding: 0;
}



 
 /* home section stylling*/

.image img{
	width: 50%;
	height: 65%;
	margin: 10px;
}



/* footer section stylling*/


footer{
	min-width: 500px;
	background: #111;
	color: #fff;
	padding: 5px 30px;
}


.log-text{
	padding: 25% 30%;
	font-size: 25px;
	text-align: center;
	color: blue;
	font-weight: 600;
}





/*create Account section sylling*/

.form1{
	border: 2px solid #fff;
	font-size: 23px;
	text-align: center;
	color: blue;
	font-weight: 600;
	margin: 5% 1%;
	background: #111;
	padding: 20px 0;
	 box-shadow: 2px 4px 4px #fff
}
.form1 h5{
	background: crimson;
	color: #fff;
}


.row input{
	margin: 20px 0;
	font-size: 20px;
}



.create_btn {
	margin: 15px 15px 20px 60%;
	font-size: 20px;
}



/* responsive media section stylling*/


@media only screen and (max-width: 900px) {
  /* For laptop: */
  nav{
  	  min-width: 500px;
  }
    .top-right {
		margin: 0;
		padding: 0;
		float: right;
	}
	.top-left {
		margin: 0px;
		padding: 0;
		float: left;
	}


	.form{
		margin: 25% 20%;
 

 
	}

	.log-text{
		padding: 25% 30%;
		font-size: 20px;
		text-align: center;
		color: red;
		font-weight: 600;
	}

		.row input{
			width: 95%;

 

}


@media only screen and (max-width: 856px) {
 
	.form1{
		margin: 5% 10%;
	}


}


@media only screen and (max-width: 768px) {
	.form1{
		margin: 5% 3%;
	}
	.row input{
		width: 98%;
		
		font-size: 18px;
		margin: 22px 0px;
	}
	.top-bg{
		height: 160vh;
	}
	.top-bg1{
		height: 160vh;

	}

}
   
@media only screen and (max-width: 710px) {
  /* For tablet: */
  .top-right{
		float: left;
		margin: 0;
	}

		.form{
		margin: 25% 15%;
		font-size: 10px;
 
	}
		.form h1{

		font-size: 25px;
		font-weight: 700;
 
	}

	 .text_input input{
		width: 70%;
	}
	.text_input {
		padding: 10px 0;
	}
	.form1{
		margin: 5% 0%;
	}




}
@media only screen and (max-width: 300px) {
  /* For phone: */
  .top-right{
  	width: 100%;

		float: left;
	}

	.login{
		font-size: 25px;
	}
	.form1{
		margin: 100% 100%;
	}
	
	
 
 
 

}

    </style>
</head>

<body>

	<section>
	 
		<nav>
			<ul class="top-left">
			  <li><a> <b><u>Help line :</u> </b><i class="fas fa-phone"></i> 01******** </a></li>
			  
	</section>



	<section class="top-bg">
		<div style="text-align:center">
		    
	    </div>
	
		<div class="mySlides ">
				<div class="customer_login">
					<div class="form1">
						<h5>[ ** Please Input Your Mailing Address. ]</h5>

						<div class="container">
							<div class="row">
								<div class="col-md-12" style="text-align: center;">
									<table style="text-align: center; margin: 0 20%;">
										<form action="order_information.php" method = "post">
											<tr>
												<td>
													<label><p> <u>Full Name :</u></p></label>	
												</td>
												<td>
													<input type="text" name="name">		
												</td>
											</tr>
											<tr>
												<td>
													<label><u>Product Code :</u></label>	
												</td>
												<td>
													<input type="text" name="product">		
												</td>
											</tr>
											<tr>
												<td>
													<label><u>Size :</u></label>	
												</td>
												<td>
													<input type="text" name="size">		
												</td>
											</tr>
											<tr>
												<td>
													<label><u>House/Holdin No : </u></label>	
												</td>
												<td>
													<input type="text" name="houseNo">		
												</td>
											</tr>
											<tr>
												<td>
													<label><u>Road No: </u></label>	
												</td>
												<td>
													<input type="txt" name="roadNo">		
												</td>
											</tr>
											<tr>
												<td>
													<label><u>Thana : </u></label>	
												</td>
												<td>
													<input type="txt" name="thana">		
												</td>
											</tr>
											<tr>
												<td>
													<label><u>Division : </u></label>	
												</td>
												<td>
													<input type="txt" name="dividion">		
												</td>
											</tr>
											<tr>
												<td>
													<label><u>Postal Code: </u></label>	
												</td>
												<td>
													<input type="txt" name="postalCode">		
												</td>
											</tr>

											<tr>
												<td>
													<label><u>Phone Number :</u></label>	
												</td>
												<td>
													<input type="text" name="phone">		
												</td>
											</tr>

											<tr>
												<td>
													<label><u>E-mail : </u></label>	
												</td>
												<td>
													<input type="e-mail" name="mail">		
												</td>
											</tr>
											<tr>
											<td>
											 	<input type="submit" name ="submit" value = "Place Order">
											</td>
											</tr>
										</form>
									</table>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
	</section>

	<footer class="btm-foot">Nokib Group & Company</i>
	</footer>

    <script>
	    var slideIndex = 1;
	    showSlides(slideIndex);

	    function plusSlides(n) {
	      showSlides(slideIndex += n);
	    }

	    function currentSlide(n) {
	      showSlides(slideIndex = n);
	    }

	    function showSlides(n) {
	        var i;
	        var slides = document.getElementsByClassName("mySlides");
	        var dots = document.getElementsByClassName("dot");
	        if (n > slides.length) {slideIndex = 1}    
	        if (n < 1) {slideIndex = slides.length}
	        for (i = 0; i < slides.length; i++) {
	          slides[i].style.display = "none";  
	        }
	        for (i = 0; i < dots.length; i++) {
	            dots[i].className = dots[i].className.replace(" active", "");
	        }
	        slides[slideIndex-1].style.display = "block";  
	        dots[slideIndex-1].className += " active";
	    }
    </script>

</body>
</html>