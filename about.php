<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Clusterizr</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

</head>
<body>
<?php  include 'header.php';?>

    <div class="row">
        <br>
    </div>
    <div class="ui grid">
    <div class="ui secondary  vertical menu">
    <a class="item">
      Create Position
    </a>
    <a class="active item">
      Available Positions
    </a>
    <a class="item">
      Expired Positions
    </a>

  </div>

    <div class="ui form">
  <div class="inline fields">
    <div class="eight wide field">
      <input type="text" placeholder="Job Keywords">
    </div>
    <div class="eight wide field">
      <input type="text" placeholder="City, State, Zip Code">
  </div>
</div>

<div class="ui buttons">
  <button class="ui button">Full-Time</button>
  <button class="ui button">Part-Time</button>
  <button class="ui button">Internship</button>
</div>
        <div class="ui items">
  <div class="item">
    <div class="image">
      <img src="http://stellinadiving.com/wp-content/uploads/2018/10/sample-logo-design-logo-design-samples-samples-of-logo-designs-sample-of-company-logo-ideas.jpg">
    </div>
    <div class="content">
      <a class="header">Full-Time Web Developer</a>
      <div class="meta">
        <span>Job Description</span>
      </div>
      <div class="description">
        <p></p>
      </div>
      <div class="extra">
        Additional Details
      </div>
    </div>
  </div>
  <div class="item">
    <div class="image">
      <img src="https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg">
    </div>
    <div class="content">
      <a class="header">Web Developer Internship</a>
      <div class="meta">
        <span>Job Description</span>
      </div>
      <div class="description">
        <p></p>
      </div>
      <div class="extra">
        Additional Details
      </div>
    </div>
  </div>
</div>
    </div>
  </div>


  <?php  include "footer.php";?>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</body>

</html>
