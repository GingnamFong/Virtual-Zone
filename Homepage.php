<?php
include_once("nav.php")
?>

  <!-- Slideshow-->

  <div class="container">

    <div class="slide-container active">
      <div class="slide">
        <div class="content">
          <h3>Hogwarts Legacy</h3>
          <p> Hogwarts Legacy is a action role-playing game developed by Avalanche Software and published by Warner Bros. 
            Games under its Portkey Games label. 
            The game is set in the Wizarding World universe, based on the Harry Potter novels.</p>
          <a href="bestellen.html" class="btn">BUY</a>
        </div>
        <div class="image">
          <img src="img/hogwartslegacy.jpg" alt="">
        </div>
      </div>
    </div>

    <div class="slide-container">
      <div class="slide">
        <div class="content">
          <h3>God Of War</h3>
          <p> Reis door mythische werelden met God of War Ragnarok. 
            Zoek naar antwoorden en bondgenoten voordat Ragnarok aanbreekt. 
           Reis met Kratos en Atreus door negen werelden met adembenemende landschappen en ga op zoek naar antwoorden en bondgenoten voordat Ragnarok aanbreekt.
            Neem het op tegen angstaanjagende vijanden, 
           waaronder angstaanjagende monsters en goden.</p>
          <a href="bestellen.html" class="btn">BUY</a>
        </div>
        <div class="image">
          <img src="img/Gododwar.png" alt="">
        </div>
      </div>
    </div>


    <div class="slide-container">
      <div class="slide">
        <div class="content">
          <h3>Elden Ring</h3>
          <p> Elden Ring is a action role-playing game developed by FromSoftware and published by Bandai Namco Entertainment. 
            Directed by Hidetaka Miyazaki with worldbuilding provided by fantasy writer George R. R. Marti.</p>
          <a href="bestellen.html" class="btn">BUY</a>
        </div>
        <div class="image">
          <img src="img/EldenRing.jpg" alt="">
        </div>
      </div>
    </div>
<!-- Add more game entries here -->
<h5>POPULAR</h5>
    <div class="container2">
    
    <div class="game">
        <img src="img/hogwartslegacy.jpg" alt="Game Cover">
        <h2>Hogwarts Legacy</h2>
        <p>Platform: Xbox One<br>
            Genre: Action</p>
    </div>
    <div class="game">
        <img src="img/EldenRing.jpg" alt="Game Cover">
        <h2>Elden Ring</h2>
        <p>Platform: PlayStation 4<br>
            Genre: Adventure</p>
    </div>
    <div class="game">
        <img src="img/Gododwar.png" alt="Game Cover">
        <h2>God of War Ragnarok</h2>
        <p>Platform: Playstation 5<br>
            Genre: Puzzle</p>
    </div>
  </div>
    <!-- Slideshow script-->

    <script>

      let slides = document.querySelectorAll('.slide-container');
      let index = 0;

      //next function
      function next() {
        slides[index].classList.remove('active');
        index = (index + 1) % slides.length;
        slides[index].classList.add('active');
      }

      // previous function
      function prev() {
        slides[index].classList.remove('active');
        index = (index - 1 + slides.length) % slides.length;
        slides[index].classList.add('active');
      }

      //autoplay

      setInterval(next, 4000); 

    </script>



  </body>
   <!-- Footer-->

   <footer class="footer">
    <div class="containerr">
      <div class="row">
        <div class="footer-col">
          <h4>Virtual Zone</h4>

          <li><a href="informatie.html">about us</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="privacybeleid.html">privacybeleid</a></li>
          <li><a href="Contact.html">Contact</a></li>

        </div>
        <div class="footer-col">
          <h4> get help</h4>

          <li><a href="FAQ.html">FAQ</a></li>
          <li><a href="#">shipping</a></li>
          <li><a href="#">returns</a></li>
          <li><a href="#">order status</a></li>
        </div>
        
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Einde Footer-->


  </html>