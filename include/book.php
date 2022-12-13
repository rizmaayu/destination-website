<div class="heading" style="background:url(images/Jeep-bromo.jpg) no-repeat">
   <h1>Pesan Sekarang</h1>
</div>

<!-- booking section starts  -->
<section class="booking">
   <h1 class="heading-title">Mari Bertualang!</h1>
   <form action="" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="nama">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="telepon">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="alamat">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="package">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="tamu">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="pemberangkatan">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="meninggalkan">
         </div>
      </div>
      
      <!-- <input type="submit" value="submit" class="btn" onclick="openPopup()"> -->
      <a href="#konfirmasi_booking" class="btn">Submit</a>
   </form>
</section>

<!-- POP UP  KONFIRMASI BOOKING-->
<section class="konfirmasi_booking" id="konfirmasi_booking">
   <div class="card_booking">
      <img src="images/404-tick.png" alt="">
      <a href="#" class="close_btn">&times;</a>
      <div class="card_detail_book">
         <h2>Thank You!</h2>
         <p>Your Booking has been succesfully submitted.</p>
         <p>Check email for confirm your booking.</p>
         <!-- <p>Thanks!</p> -->
      </div>
      <div class="detail_btn_book">
         <a href="index.php?include=book" class="btn">OK</a>
      </div>
   </div>
</section>
<!-- booking section ends -->