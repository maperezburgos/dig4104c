<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clusterizr | Contact</title>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  </head>
<body>

    <?php  include 'header.php';?>

    <h1 class="ui dividing header">Contact Us</h1>

        <form action="" class="ui form">
            <div class="field">
                <label>Name</label>
                <div class="input">
                    <input type="text" name="name" placeholder="Your Name">
                </div>
            </div>

            <div class="field">
                <label>Email</label>
                <div class="input">
                    <input type="text" name="email" placeholder="Email">
                </div>
            </div>

            <div class="field">
                <label>Subject</label>
                <div class="input">
                    <input type="text" name="subject" placeholder="Subject">
                </div>
            </div>

            <div class="field">
                <label>Message</label>
                <div class="input">
                    <textarea rows="2"></textarea>
                </div>
            </div>

          </form>

    <?php  include 'footer.php';?>
