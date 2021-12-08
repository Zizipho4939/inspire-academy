
<html>
    <head>
        <title>Inspire Academy</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        
        <div class="form">
            <div class="inspire-academy-name-registration">
                <b><h1>INSPIRE ACADEMY INITIATIVE</h1></b>
            </div>
            <div class="reg-name"><b>REGISTRATION</b></div>
            <form action="CRUD.php" method="post">
                <div class="form-input">
                    Are you registered at a school (full-time) or preparing for a deferred/supplementary exam? 
                    <input type="text" name="isRegistered" required="required" placeholder="Yes/No"/>
                </div>
                <div class="form-input">
                    <input type="text" name="name" required="required" placeholder="name" class="inputs"/>
                </div>
                <div class="form-input">
                    <input type="text" name="surname" required="required" placeholder="surname" class="inputs"/>
                </div>
                <div class="form-input">
                    <input type="text" name="id" required="required" placeholder="ID Number" class="inputs"/>
                </div>
                <div class="form-input">
                    <input type="text" name="grade" required="required" placeholder="Grade" class="inputs"/>
                </div>
                <div class="form-input">
                    <input type="email" name="email" required="required" placeholder="Email address" class="inputs" />
                </div>
                <div class="form-file">
                    Parent/guardian agreement document: <input type="file" name="parent-agreement-document" id="" />
                </div>
                <div class="form-input">
                    <input type="password" name="password" required="required" placeholder="Password" class="inputs"/>
                </div>
                <div class="form-input">
                    <button type="submit" name="reg-save" class="save-button">Submit</button>
                </div>
            </form>
        </div>
        
    </body>
</html>