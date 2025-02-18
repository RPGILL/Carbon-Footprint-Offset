<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Carbon Footprint Offset</title>
  <style>
    /* Basic Reset & Font */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f5f5f5;
      color: #333;
      line-height: 1.6;
    }

    header, nav, footer {
      background-color: #004d40; /* Dark green */
      color: #fff;
      padding: 1rem;
    }

    nav ul {
      display: flex;
      list-style: none;
      gap: 1rem;
    }

    nav ul li {
      cursor: pointer;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #eee;
    }

    /* Carousel Container */
    .carousel {
      position: relative;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      overflow: hidden;
       /* Adjust height to suit your images/design height: 50vh; /* Adjust height to suit your images/design */
    }

    .slide {
      display: none; /* Hide all slides by default */
      position: relative;
      width: 100%;
      height: 100%;
    }

    .slide img {
      width: 100%;
      height: auto;
      object-fit: none;
    }

    /* Optional Text Caption */
    .caption {
      position: absolute;
      bottom: 20px;
      left: 20px;
      color: #fff;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
      background-color: rgba(0,0,0,0.3);
      padding: 0.5rem 1rem;
      border-radius: 5px;
    }

    /* Arrows */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 1rem;
      margin-top: -1.5rem;
      color: #fff;
      font-weight: bold;
      font-size: 1.5rem;
      transition: 0.3s;
      user-select: none;
      background-color: rgba(0,0,0,0.3);
    }

    .prev {
      left: 0;
      border-radius: 0 3px 3px 0;
    }
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.6);
    }

    main {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    h2 {
      margin-bottom: 1rem;
      color: #004d40;
    }

    /* Booking Section */
    .booking-section {
      background-color: #fff;
      padding: 2rem;
      border-radius: 8px;
      margin-bottom: 2rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .booking-section label {
      display: block;
      margin: 0.5rem 0 0.2rem;
    }

    .booking-section input, .booking-section select {
      width: 100%;
      padding: 0.5rem;
      margin-bottom: 1rem;
    }

    button {
      background-color: #004d40;
      color: #fff;
      padding: 0.7rem 1.2rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #00352e;
    }

    /* Offset Section */
    .offset-section {
      background-color: #e0f2f1;
      padding: 2rem;
      border-radius: 8px;
      margin-bottom: 2rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .offset-options {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .offset-option {
      background-color: #fff;
      flex: 1;
      min-width: 220px;
      padding: 1rem;
      border-radius: 8px;
      text-align: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .offset-option h3 {
      color: #00695c;
      margin-bottom: 0.5rem;
    }

    /* Monthly Report Section */
    .report-section {
      background-color: #fff;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      margin-bottom: 2rem;
      text-align: center;
    }

    footer {
      text-align: center;
      padding: 1rem;
      margin-top: 2rem;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Book Travel</a></li>
        <li><a href="#">Offsets</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </nav>
  </header>

  <!-- CAROUSEL SECTION -->
  <section class="carousel" id="carousel">
    <!-- Slide 1 (CARBON.png) -->
    <div class="slide">
      <img 
        src="images/CARBON.png"
        alt="Second Photo: CARBON"
      />
      <div class="caption">
        <h1>Carbon Footprint Offset</h1>
      </div>
    </div>

    <!-- Slide 2 (Footprint.png) -->
    <div class="slide">
      <img
        src="images/Footprint.png"
        alt="Third Photo: Footprint"
      />
    </div>

    <!-- Slide 3 (Carbon Footprint Offset.png) -->
    <div class="slide">
      <img
        src="images/Carbon Footprint Offset.png"
        alt="Fourth Photo: Carbon Footprint Offset"
      />
    </div>

    <!-- Navigation arrows -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </section>

  <!-- MAIN CONTENT -->
  <main>
    <!-- BOOKING SECTION -->
    <section class="booking-section">
      <h2>Book Your Journey</h2>
      <form>
        <!-- Journey Type -->
        <label for="journeyType">Select Your Mode of Travel</label>
        <select id="journeyType" name="journeyType" required>
          <option value="">-- Choose an Option --</option>
          <option value="rail">Rail</option>
          <option value="flight">Flight</option>
          <option value="bus">Bus</option>
          <option value="car">Car</option>
        </select>

        <!-- From & To -->
        <label for="fromLocation">From:</label>
        <input type="text" id="fromLocation" name="fromLocation" placeholder="Enter departure city" required />

        <label for="toLocation">To:</label>
        <input type="text" id="toLocation" name="toLocation" placeholder="Enter destination city" required />

        <!-- Date & Passengers -->
        <label for="departureDate">Departure Date:</label>
        <input type="date" id="departureDate" name="departureDate" required />

        <label for="passengers">Number of Passengers:</label>
        <input type="number" id="passengers" name="passengers" min="1" max="20" required />

        <!-- Submit -->
        <button type="submit">Search & Calculate Footprint</button>
      </form>
    </section>

    <!-- OFFSET SECTION -->
    <section class="offset-section">
      <h2>Offset Your Journey</h2>
      <p>Your travel has an environmental impact. Contribute to environmental projects to offset the carbon you produce.</p>
      <div class="offset-options">
        <!-- Option 1 -->
        <div class="offset-option">
          <h3>Plant a Tree</h3>
          <p>Support global reforestation initiatives in regions that need it the most.</p>
          <button>Plant Now</button>
        </div>
        <!-- Option 2 -->
        <div class="offset-option">
          <h3>Buy Carbon Credits</h3>
          <p>Purchase verified carbon credits to neutralize your emissions.</p>
          <button>Buy Credits</button>
        </div>
        <!-- Option 3 -->
        <div class="offset-option">
          <h3>Invest in Clean Energy</h3>
          <p>Help finance wind or solar power projects around the world.</p>
          <button>Invest</button>
        </div>
      </div>
    </section>
<!-- MONTHLY REPORT SECTION -->
    <!-- MONTHLY REPORT SECTION -->
    <section class="report-section">
      <h2>Get Your Monthly Carbon Report</h2>
      <p>Sign up to receive a detailed monthly breakdown of your carbon footprint and progress.</p>
      <form>
        <input type="email" placeholder="Enter your email" required />
        <button type="submit">Subscribe</button>
      </form>
    </section>
  </main>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 Carbon Footprint Offset. All Rights Reserved.</p>
  </footer>

  <!-- SIMPLE JS FOR THE CAROUSEL -->
  <script>
    let slideIndex = 0;
    const slides = document.getElementsByClassName("slide");

    // Show the first slide initially
    showSlide(slideIndex);

    // Function to navigate slides
    function plusSlides(n) {
      slideIndex += n;
      if (slideIndex >= slides.length) {
        slideIndex = 0;
      } else if (slideIndex < 0) {
        slideIndex = slides.length - 1;
      }
      showSlide(slideIndex);
    }

    // Auto-change slides every 3 seconds
    setInterval(() => {
      plusSlides(1);
    }, 3000);

    function showSlide(index) {
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[index].style.display = "block";
    }
  </script>
</body>
</html>
