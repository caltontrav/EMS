<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/Style.css" type="text/css" />
    <title>admin panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-menu">
            <h1>EMS</h1>
        </div>
        <ul>
            <a href="index.php">
                <li><i class="fas fa-grip-horizontal"></i>&nbsp;Dashboard</li>
            </a>
            <a href="employee.php">
                <li><i class="fas fa-user-tie"></i>&nbsp;Employees</li>
            </a>
            <a href="attendance.php">
                <li><i class="fas fa-user-check"></i>&nbsp;Attendance</li>
            </a>
            <a href="users.php">
                <li><i class="fas fa-users"></i>&nbsp;users</li>
            </a>
            <li><i class="fas fa-cogs"></i>&nbsp;settings</li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="search" />
                    <button type="submit"><i class="fab fa-searchengin"></i></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                </div>
                <div class="signout">
                    <a href="#"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
        <?php
require_once "./connect.php";
?>


        <div class="content">
            <div class="content-2">

                <div class="new-students">
                    <div class="title">
                        <h2>EMPLOYEE FORM</h2>
                        <a href="#" class="btn">view All</a>
                    </div>

                    <div class="form-side" id="myForm">
                        <form action="form.php" method="POST">

                            <label for="fname"><b>first name</b></label><br>
                            <input type="text" placeholder="Enter fname" name="first_name" required><br>
                            <label for="lname"><b>last name</b></label><br>
                            <input type="text" placeholder="Enter Lname" name="last_name" required><br>
                            <label for="e-No"><b>employee number</b></label><br>
                            <input type="text" placeholder="Enter employee number" name="employee_number" required><br>

                            <button type="submit" class="btn">submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>