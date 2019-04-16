<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clusterizr | Log In</title>
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
        <?php include "./header.php"; ?>
                <div>
                    <label>Login Info</label>
                    <div class="fields">
                        <div class="field">
                            <input type="text" name="username" placeholder="User Name">
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit">
        </form>

        <?php include "./footer.php"; ?>
    </body>
</html>
