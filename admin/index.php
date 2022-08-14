<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/align.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
</head>
<body>
    <div class="login-main">
    <center style="background:#f5f5f5;">
    <div class="container">
       
        <div class="login">
            <div class="top">
          <h2>Admin Login</h2>
            </div>
            <div class="logform">
                <form action="server.php" method="POST">
                    <div class="field">
                        <div class="name" ><h3>Admin</h3></div>
                        <div class="input" reqired>
                            <input name="admin" type="text" placeholder="Admin" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name"><h3>Password</h3></div>
                        <div class="input">
                            <input name="password" type="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="field">
                      <center>  <button type="submit" name="submit">Login</button> </center> 
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</center>
</div>

</body>
</html>