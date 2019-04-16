
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Clusterizr - Student Sign Up</title>


    <?php  include 'loginheader.php';?>

    <div class="ui container">

    <h1>Signup</h1>
    <h3 class="ui dividing header">Student</h3>

        <form action="" class="ui form">
            <div class="field">
                <label>PID (numbers only)</label>
                <div class="input">
                    <input type="text" name="pid" placeholder="1234567">
                </div>
            </div>

            <h4 class="ui dividing header">Personal Information</h4>
            <div class="field">
                <label>Name</label>
                <div class="two fields">
                    <div class="field">
                        <input type="text" name="firstname" placeholder="First Name">
                    </div>
                    <div class="field">
                        <input type="text" name="lastname" placeholer="Last Name">
                    </div>
                </div>
                <label>Contact Info</label>
                <div class="fields">
                    <div class="twelve wide field">
                        <input type="email" name="email" placeholder="example@knights.ucf.edu">
                    </div>
                    <div class="four wide field">
                        <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="XXX-XXX-XXXX">
                    </div>
                </div>
                <label>Mailing Address</label>
                <div class="fields">
                    <div class="twelve wide field">
                        <input type="text" name="addressl1" placeholder="Street Address">
                    </div>
                    <div class="four wide field">
                        <input type="text" name="addressl2" placeholder="Apartment/PO Box #">
                    </div>
                </div>
                <div class="two fields">
                    <div class="ui fluid dropdown">
                        <!--paste in-->
                    </div>
                    <div class="field">
                        <input type="text" name="country" placeholder="Countnry">
                    </div>
                </div>

            </div>
            <input type="submit">
        </form>

      </div>

       <?php  include 'footer.php';?>
