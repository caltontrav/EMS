<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Admin signin</title>
</head>

<body>
    <main>

        <div class="signin-form">
            <img src="./image/avatar.png" width="100px" alt="">
            <h2>WELCOME ADMIN</h2>
            <div class="form-group">
                <form action="./login.php" method="POST">
                    <label for="uname">username</label><br>

                    <input type="text" placeholder="User Name" name="username" required><br>

                    <label for="pass">password</label><br>

                    <input type="password" placeholder="Password" name="password" required><br>

                    <button class="btn" type="submit">signin</button>
                </form>

            </div>




        </div>
    </main>
</body>

</html>