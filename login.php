<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Reviewer</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link href="css/styles1.css" rel="stylesheet" type="text/css" />
    <link href="css/styles_new.css" rel="stylesheet" type="text/css" />
    <link href="css/tumblr.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div id="tfheader">
        <form id="tfnewsearch" method="get" action="http://www.google.com">
            <input type="text" class="tftextinput" name="q" size="21" maxlength="120"/>
            <input type="submit" value="search" class="tfbutton"/>
        </form>
    </div>
    <div class="header-wrapper">
        <input type="button" value="Login" class="btn btn-danger btn-login" />
        <div class="header">
            <div class="logo">
                <div class="header1">
                    <h1>Reviewer</h1>
                </div>
            </div>
            <!---logo ends here -->
            <div class="menu">
                <ul>
                   <li><a href="login.php" onclick="alert('Login dulu bos')">Movie News</a></li>
                    
                    <li><a href="login.php" onclick="alert('Login dulu bos')">Schedule</a></li>

                    <li><a href="login.php" onclick="alert('Login dulu bos')">Review</a></li>

                    <li><a href="login.php" onclick="alert('login dulu bos')">Theater</a></li>

                    <li><a href="login.php" onclick="alert('login dulu bos')">Forum</a></li>
                </ul>
            </div>
            <!--- menu ends here -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="form-user clearfix">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><h1>SIGN IN</h1></label>
                        <form action="login_user.php" method="POST">
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                        
                        <a href="#">forgot password</a>
                    </div>
                    <button class="btn btn-danger">LOGIN</button>
                    <p>OR</p>
                    <a href="login_with_tumblr.php" class="btn btn-primary">LOGIN WITH THUMBLER</a>
                    
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><h1>SIGN UP</h1></label>
                        <form action="register.php" method="POST">
                        <input type="text" name ="nama" class="form-control" placeholder="nama">
                    </div>
                    <div class="form-group">
                        <input type="text"  name ="username" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="password" name="repassword" class="form-control" placeholder="konfir password">
                    </div>
                    <button class="btn btn-danger">SIGN UP</button>
                </div>
            </form>  
        </div>
    </div>
    <footer class="clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="copyright text-center">
                    Copyright (c) Reviewer All rights reserved.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>