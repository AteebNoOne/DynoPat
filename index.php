<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./header.css">
  <link rel="stylesheet" href="./footer.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>Salesforce Free Demo Class</title>
  <script>
    function loadHTML(elementId, url) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          document.getElementById(elementId).innerHTML = xhr.responseText;
        }
      };
      xhr.open("GET", url, true);
      xhr.send();
    }
  </script>
</head>
<body>
  <header>
    <img class="header-logo" src="demo-logo.webp" />
    <div class="number">
        <div>
            <img src="phone.jpg" />
            <img src="whatsapp.png" />
            <a href="">+1 (302) 567-6126</a>
        </div>
        <div>
        <img src="phone.jpg" />
        <img src="whatsapp.png" />
        <a href="">+1 (302) 567-6126</a>
    </div>
    <div>
        <img src="email.png" />
        <a href="mailto:info@dynopat.com">info@dynopat.com</a>
    </div>
    </div>
    <div class="header-btn">
        <button>GET STARTED</button>
    </div>
    <!-- Add any other header content you need -->
  </header>
  <main>
    <!-- Other main content here -->
    <div id="body1">
      <?php include("body1.html"); ?>
    </div>
    <div id="slider">
      <?php include("slider.html"); ?>
    </div>
    <div id="team">
      <?php include("team.html"); ?>
    </div>
  </main>
  <footer>
    <!-- Add any other footer content you need -->
    <div class="links">
        <a href="https://www.facebook.com" target="_blank"><img src="fb.png"></a>
        <a href="https://www.facebook.com" target="_blank"><img src="linkedin.png"></a>
        <a href="https://www.facebook.com" target="_blank"><img src="instagram.png"></a>
        <a href="https://www.facebook.com" target="_blank"><img src="twitter-sign.png"></a>
        <a href="https://www.facebook.com" target="_blank"><img src="youtube.png"></a>
    </div>
  </footer>

  <script>
    // Load HTML content into the specified div elements
    loadHTML("body1", "body1.html");
    loadHTML("slider", "slider.html");
    loadHTML("team", "team.html");
  </script>
</body>
</html>
