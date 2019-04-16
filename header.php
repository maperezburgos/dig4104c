
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Navbar and Footer</title>
  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

<style>
#centered {
    margin-left: calc(50% - 350px);
    font-size: 1.3em;
}
</style>

</head>
<body>

  <!--Header-->
    <div class="ui secondary menu">
      <div class="ui container">
      <a href="dashboard.php">
        <img src="clusterizer.png" alt="Clusterizr">
      </a>

      <div class="item center" id="centered">
      <a class="item" href="dashboard.php">
        Dashboard
      </a>
      <a class="item" href="jobbportal.php">
        Job Portal
      </a>
    </div>


      <div class="right menu">


        <div class="ui item dropdown">
          <div class="text">Hello, username</div>
          <i class="dropdown icon"></i>

          <div class="menu">
            <a class="item" href="jobbportal.php">
              Messages
            </a>
            <a href="jobbportal.php" class="item">
              Your Profile
            </a>
          </div>

        </div>


          <div class="ui item">
            <button class="ui secondary button">
              Logout
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--End Header-->


<!--Header-
  <div class="ui secondary  menu">
    <a class="active item" href="dashboard.php">
      Home
    </a>
    <a class="item" href="messages.php">
      Messages
    </a>
    <a href="profile.php"class="item">
      Your Profile
    </a>
    <a class="item" href="portal.php">
Jobs Portal    </a>
    <div class="right menu">
      <div class="item">
        <div class="ui icon input">
          <input type="text" placeholder="Search...">
          <i class="search link icon"></i>
        </div>
      </div>
      <a class="ui item">
        Logout
      </a>
    </div>
  </div>
  End Header-->

  <script>
  $('.ui.dropdown')
  .dropdown()
;
</script>
  </body>
  </html>
