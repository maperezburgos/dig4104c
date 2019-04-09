
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Messages</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <style>
      .container{
          padding: 25px 15px;
      }
  </style>

</head>
<body>
<?php  include 'header.php';?>


  <div class="ui container">
      <div class="ui grid">
          <div class="column five wide">
                <h1 class="ui small">Conversations</h1>
            <div class="ui card" style="width: 100%;">
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
                                    <div class="description">Recruiter at Apple</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <div class="column eleven wide">
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
  
<?php  include 'footer.php';?>

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
</body>

</html>
