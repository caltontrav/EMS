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
                    <a href="registration-form.php" class="btn">Add New</a>
                </div>
                <div class="signout">
                    <a href="signout.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
        <?php
require_once "./connect.php";
?>
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Employees</h2>
                        <a href="#" class="btn">view All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>first-name</th>
                                <th>last-name</th>
                                <th>employee-number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

$sql = 'SELECT * FROM employee';
$cmd = $db->prepare($sql);
$cmd->execute();

$employees = $cmd->fetchAll();
foreach($employees as $employee) {
  echo '
          <tr>
            <td>'.$employee['id'].'</td>
            <td>'.$employee['first_name'].'</td>
            <td>'.$employee['last_name'].'</td>
            <td>'.$employee['employee_number'].'</td>
            <td><a href="delete-employee.php?id='.$employee['id'].'"><i class="fas fa-trash-alt"></i></a> </td>
            
          </tr>

  ';
}

?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>