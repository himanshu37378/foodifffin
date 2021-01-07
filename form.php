<!DOCTYPE html>
<html lang="en">
<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OmniFood is a premium food delivery service with mission to bring affordable and healthy meals to as many people as possible.">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/media-queries.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <title>ORDER FOOD</title>
    
   <!-- <script>
	function submitpage(){
		window.location.href= "https://gogle.com/";
	}
	</script>-->
</head>
<body>
 
 
<section class="form-nav">
		<nav>
		<div class="row">
			  <img src="resources/img/logo-white.png" alt="OMNIFOOD LOGO" class="logo" >   
			<ul class="main-nav formbtm">
			   <li><a href="index.php#about">About US</a></li>    
			   <li><a href="index.php#cities" target="_blank">Our cities</a></li> 
			   <li><a href="index.php#plans" target="_blank">Plans</a></li> 
			   <li><a href="index.php#reviews" target="_blank">Reviews</a></li> 
			</ul>
		</div>
		</nav>
</section>
    
    
    
    
	 <section class="section-form" id="form">
    <div class="row">
        <h2>We're ready to serve you</h2>
        </div>
    <div class="row">
		<p id="success">
		
		</p>
        <form  class="contact-form" id="order-form">
        
        <div class="row">
            <div class="col span-1-of-3">
                <label for="name">Name</label>
            
            </div>
            <div class="col span-2-of-3">
               <input type="text" name="name" id="name" placeholder="Your Name" required>
                
            </div>
            </div>
            
            
            <div class="row">
            <div class="col span-1-of-3">
                <label for="email">Email</label>
            
            </div>
            <div class="col span-2-of-3">
               <input type="email" name="email" id="email" placeholder="Your E-Mail" required>
                
            </div>
            </div>
            
            
             <div class="row">
            <div class="col span-1-of-3">
                <label for="phone">Phone</label>
            
            </div>
            <div class="col span-2-of-3">
               <input type="text" name="phone" id="phone" placeholder="Your Phone Number" required>
                
            </div>
            </div>         
                        
            <div class="row">
            <div class="col span-1-of-3">
                <label for="type">Which type of service you want</label>
            
            </div>
            <div class="col span-2-of-3">
                <select name="type" id="type">
                    <option value="Monthly" selected>Monthly</option>
                    <option value="Weak">Weak</option>
                    <option value="One">One time</option>
                    
                </select>
            </div>
            </div>
            
              
            <div class="row">
            <div class="col span-1-of-3">
                <label>Do you want Non-veg</label>
            
            </div>
            <div class="col span-2-of-3">
               <input type="checkbox" name="nveg" id="nveg" > Yes, Please
                
            </div>
            </div>
            
            
                         
            <div class="row">
            <div class="col span-1-of-3">
                <label>Your address</label>
            
            </div>
            <div class="col span-2-of-3">
              <textarea name="address" placeholder="Your Address"></textarea>
                
            </div>
            </div> 
            
                        
              
            <div class="row">
            <div class="col span-1-of-3">
                <label>&nbsp;</label>
            
		</div>
		<div class="col span-2-of-3">
		
		<input type="submit" value="Order Now" name="submit">
			
				</div>
		</div>
            
            
        </form>
        </div>
    </section>
    
    
    
     <footer>
      <div class="row">
        <div class="col span-1-of-2">
           <ul class="footer-nav">
               <li><a href="index.php#about">About us</a></li>
               <li><a href="index.php#cities" target="_blank">Cities</a></li>
               <li><a href="index.php#reviews">Reviews</a></li>
               <li><a href="index.php#map">Location</a></li>
               <li><a href="index.php#plans">Plans</a></li>
            
            </ul>
          </div>
    
           <div class="col span-1-of-2">
                  <ul class="social-links">
                    <li><a href="https://www.facebook.com/foodiffin.restaurent.3" target="_blank"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="https://twitter.com/FoodiffinR" target="_blank"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="mailto:foodiffinrestaurent@gmail.com" target="_blank"><i class="ion-social-googleplus"></i></a></li>
                    <li><a href="https://www.instagram.com/foodiffinrestaurent/?hl=en" target="_blank"><i class="ion-social-instagram"></i></a></li>
               
               
               
               </ul>
          </div>
          </div>
    
    
    </footer>
    
    
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src='google-sheet.js'></script> 

</body>
</html>
<!--		<a href="submit.php"><input type="submit" value="Order Now"></a>