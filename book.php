<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Topbnb</title>
    <link rel="stylesheet" href="bnb.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
 <body>

<?php
  include 'nav.php';
 ?>

 <div class="row">
   <div class="col-4 col-s-4 menu">
   </div>
   <div class="col-4 col-s-8">
       <div class="signin">
     <form action="PHP/admin.php" target="_blank" method="post" autocomplete="on">
     <h2 style="color:#600000;text-align:center">BOOK A PLACE TO STAY!</h2>
     <h5 style="text-align:center">PERSONAL INFORMATION:</h5>
       <input type="text" name="firstname" placeholder="Firstname" required>
       <input type="text" name="lastname" placeholder="Lastname" required>
       <input type="tel" name="phone" placeholder="Phone Number" required>
       <input type="email" name="email" placeholder="Email Address" required>
       <h5 style="text-align:center">SELECT A PLACE YOU WANT TO STAY:</h5>
       <select id="book" name="book">
        <option value="volvo">Nairobi-One Bedroom Apartment- Kshs 1,600</option>
        <option value="saab">Nairobi-Two Bedroom Apartment-  Kshs 2,000</option>
        <option value="fiat">Nairobi-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="audi">Nairobi-Four Bedroom Apartment-  Kshs 5,600</option>
        <option value="volvo">Nanyuki-One Bedroom Apartment- Kshs 1,000</option>
        <option value="saab">Nanyuki-Two Bedroom Apartment- Kshs 1,600</option>
        <option value="fiat">Nanyuki-Three Bedroom Apartment- Kshs 2,600</option>
        <option value="audi">Nanyuki-Four Bedroom Apartment- Kshs 2,600</option>
        <option value="volvo">Watamu-One Bedroom Apartment- Kshs 1,600</option>
        <option value="saab">Watamu-Two Bedroom Apartment- Kshs 2,000</option>
        <option value="fiat">Watamu-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="audi">Watamu-Four Bedroom Apartment- Kshs 5,600</option>
        <option value="volvo">Mombasa-One Bedroom Apartment- Kshs 2,000</option>
        <option value="saab">Mombasa-Two Bedroom Apartment- Kshs 4,600</option>
        <option value="fiat">Mombasa-Three Bedroom Apartment- Kshs 5,600</option>
        <option value="audi">Mombasa-Four Bedroom Apartment- Kshs 6,600</option>
        <option value="volvo">Nakuru-One Bedroom Apartment- Kshs 1,200</option>
        <option value="saab">Nakuru-Two Bedroom Apartment- Kshs 1,600</option>
        <option value="fiat">Nakuru-Three Bedroom Apartment- Kshs 2,000</option>
        <option value="audi">Nakuru-Four Bedroom Apartment- Kshs 3,600</option>
        <option value="volvo">Diani-One Bedroom Apartment- Kshs 5,000</option>
        <option value="saab">Diani-Two Bedroom Apartment- Kshs 5,600</option>
        <option value="fiat">Diani-Three Bedroom Apartment- Kshs 6,600</option>
        <option value="audi">Diani-Four Bedroom Apartment- Kshs 7,600</option>
        <option value="volvo">Kisumu-One Bedroom Apartment- Kshs 1,600</option>
        <option value="saab">Kisumu-Two Bedroom Apartment- Kshs 2,000</option>
        <option value="fiat">Kisumu-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="audi">Kisumu-Four Bedroom Apartment- Kshs 5,600</option>
        <option value="volvo">Malindi-One Bedroom Apartment- Kshs 3,600</option>
        <option value="saab">Malindi-Two Bedroom Apartment- Kshs 5,600</option>
        <option value="fiat">Malindi-Three Bedroom Apartment- Kshs 6,000</option>
        <option value="audi">Malindi-Four Bedroom Apartment- Kshs 8,600</option>
        <option value="volvo">Naivasha-One Bedroom Apartment- Kshs 1,600</option>
        <option value="saab">Naivasha-Two Bedroom Apartment- Kshs 2,000</option>
        <option value="fiat">Naivasha-Three Bedroom Apartment- Kshs 3,600</option>
        <option value="audi">Naivasha-Four Bedroom Apartment- Kshs 5,600</option>
      </select>
      <h5 style="text-align:center">SELECT A DATE:</h5>
      <h6 style="text-align:center">CHECK-IN:</h6>
      <input type="date" id="starts" name="starts">
      <h6 style="text-align:center">CHECK-OUT:</h6>
      <input type="date" id="ends" name="ends">
      <h5 style="text-align:center">MODE OF PAYMENT:</h5>
      <p style="text-align:center">One is suppost to pay on arrival</p>
      <select id="cars" name="cars">
       <option value="volvo">M-Pesa</option>
       <option value="saab">Cash</option>
       <option value="fiat">Card</option>
       <option value="audi">PayPal</option>
      </select>
       <br><br>
      <p style="text-align:center"><input type="submit" value="Send Booking"></p>
   </form>
   </div>
   </div>
   <div class="col-4 col-s-12">
   </div>
 </div>

 <?php include 'footer.php'; ?>

 </body>
</html>
