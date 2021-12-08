
<html>
    <head>
        <title>Inspire Academy</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        
        <div class="form">
            <div class="inspire-academy-name">
                <b><h1>INSPIRE ACADEMY INITIATIVE</h1></b>
            </div>
            <div class="reg-name"><b>SIGN IN</b></div>
            <form action="CRUD.php" method="get">
                <div class="form-input">
                    <input type="text" name="name" required="required" placeholder="Name" class="inputs"/>
                </div>
                <div class="form-input">
                    <input type="password" name="password" required="required" placeholder="Password" class="inputs"/>
                </div>
                <div class="form-input">
                    <button type="submit" name="sign-in" class="save-button">Sign in</button>
                </div>
            </form>
        </div>
        
    </body>
</html>