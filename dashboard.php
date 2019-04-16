<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clusterizr | Dashboard</title>
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

 <script>
  $('.ui.dropdown')
  .dropdown()
;
</script>

  <div class="ui  grid">
    <div class="row">
      <div class="three wide column">
        <img src="images/pegasus.png" alt="#">
      </div>
      <div class="thirteen wide column">
        <h1>Student Name</h1>
        <p>BIO:Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Education:</p>
        <p>Location:</p>
        <a href="#">Resume</a> <a href="#">Portfolio</a> <a href="#">Experience</a> <a href="#">Interest</a> <a href="#">Education</a>
      </div>
    </div>

    

    <div class="row">
      <div class="three wide column">
        
      <h1>Interactive Resorces</h1>

      <h1>Resource 1</h1>
        <a href="#"> Lorem ipsum dolor sit amet</a>
        <a href="#"> Lorem ipsum dolor sit amet</a>


      <h1>Resource 2</h1>
   
        <a href="#"> Lorem ipsum dolor sit amet</a>
        <a href="#"> Lorem ipsum dolor sit amet</a>
      </div>
      <div class="thirteen wide column">

          <div class="ui container">
              <div class="ui grid">
                 
          <div class="column thirteen wide">
              <h1 class="ui small">Messages</h1>
                  <form class="ui form chat">
          <div class="conversation" style="height: 500px; overflow: auto; padding: 6px;"><div class="ui card" style="width: 100%;">
          <div class="content">
              <div class="ui link items">
                  <div class="item">
                      <div class="ui tiny image circular">
                          <img src="https://ryan.bealey.org/assets/images/client.png" alt="Client">
                      </div>
                      <div class="content">
                          <div class="header">Jane Doe</div>
                          <div class="description">Yo.</div>
                      </div>
                  </div>
              </div>
          </div>
      </div><div class="ui card" style="width: 100%;">
          <div class="content">
              <div class="ui link items">
                  <div class="item">
                      <div class="ui tiny image circular">
                          <img src="https://ryan.bealey.org/assets/images/client.png" alt="Client">
                      </div>
                      <div class="content">
                          <div class="header">Jane Doe</div>
                          <div class="description">This is a test.</div>
                      </div>
                  </div>
              </div>
          </div>
      </div><div class="ui card" style="width: 100%;">
          <div class="content">
              <div class="ui link items">
                  <div class="item">
                      <div class="ui tiny image circular">
                          <img src="https://ryan.bealey.org/assets/images/client.png" alt="Client">
                      </div>
                      <div class="content">
                          <div class="header">Jane Doe</div>
                          <div class="description">Actually, can we do 3:30pm?</div>
                      </div>
                  </div>
              </div>
          </div>
      </div><div class="ui card" style="width: 100%;">
          <div class="content">
              <div class="ui link items">
                  <div class="item">
                      <div class="ui tiny image circular">
                          <img src="https://ryan.bealey.org/assets/images/client.png" alt="Client">
                      </div>
                      <div class="content">
                          <div class="header">Jane Doe</div>
                          <div class="description">Sounds great!</div>
                      </div>
                  </div>
              </div>
          </div>
      </div><div class="ui card" style="width: 100%;">
          <div class="content">
              <div class="ui link items">
                  <div class="item">
                      <div class="ui tiny image circular">
                          <img src="https://ryan.bealey.org/assets/images/ryan.jpg" alt="Ryan Bealey">
                      </div>
                      <div class="content">
                          <div class="header">
                              Ryan Bealey <a class="ui teal mini label">RECRUITER</a>
                          </div>
                          <div class="description">I'd love to hear more about it! Can you meet at Panera around 3:00pm?</div>
                      </div>
                  </div>
              </div>
          </div>
      </div><div class="ui card" style="width: 100%;">
          <div class="content">
              <div class="ui link items">
                  <div class="item">
                      <div class="ui tiny image circular">
                          <img src="https://ryan.bealey.org/assets/images/client.png" alt="Client">
                      </div>
                      <div class="content">
                          <div class="header">Jane Doe</div>
                          <div class="description">Yeah! I'm looking to build an online marketplace that handles online transactions for private vehicle sales. Are you up for the challenge?</div>
                      </div>
                  </div>
              </div>
          </div>
      </div><div class="ui card" style="width: 100%;">
          <div class="content">
              <div class="ui link items">
                  <div class="item">
                      <div class="ui tiny image circular">
                          <img src="https://ryan.bealey.org/assets/images/ryan.jpg" alt="Ryan Bealey">
                      </div>
                      <div class="content">
                          <div class="header">
                              Ryan Bealey <a class="ui teal mini label">RECRUITER</a>
                          </div>
                          <div class="description">Hey there, it's Ryan! I noticed you created a ticket but never sent me a note. Do you have a project proposal?</div>
                      </div>
                  </div>
              </div>
          </div>
      </div></div>
                          <br>
                      <div class="commentbox">
                          <textarea name="message" class="commentmsg message" rows="6"></textarea>
                          <input type="text" name="case" class="casenumber" style="display: none;">
                          <div class="ui button green sendnote msg" style="margin-top: 10px;">Send Message</div>
                      </div>
                  </form>
                  <!--<script src="./assets/js/pullticket.js"><script>-->
               
          </div>
    </div>
</div>
        </div>
    </div>
    

    
  </div>
  <script type="text/javascript">
    $(function(){
        $(".msg").on("click", function(e){
            e.preventDefault();
            let note = $(".message").val();
            let message = `<div class="ui card" style="width: 100%;">
            <div class="content">
                <div class="ui link items">
                    <div class="item">
                        <div class="ui tiny image circular">
                            <img src="https://ryan.bealey.org/assets/images/client.png" alt="Jane Doe">
                        </div>
                        <div class="content">
                            <div class="header">
                                Jane Doe
                            </div>
                            <div class="description">${note}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`;
            $(".conversation").prepend(message);
            $(".message").val(""); 
        });
    });
</script>

<?php  include 'footer.php';?>


</body>
</html>
