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

                <div class="new-students">
                    <div class="title">
                        <h2>Attendance</h2>
                        <a href="#" class="btn">view All</a>
                    </div>

                    <table>

                        <thead>
                            <tr>
                                <th>id</th>
                                <th>employee-number</th>
                                <th>time-in</th>
                                <th>time-out</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

$sql = 'SELECT * FROM attendance';
$cmd = $db->prepare($sql);
$cmd->execute();

$attendee = $cmd->fetchAll();
foreach($attendee as $attendance) {
  echo '
          <tr>
            <td>'.$attendance['id'].'</td>
            <td>'.$attendance['employee_number'].'</td>
            <td>'.$attendance['time_in'].'</td>
            <td>'.$attendance['time_out'].'</td>
            <td><a href="delete-attendance.php?id='.$attendance['id'].'"><i class="fas fa-trash-alt"></i></a></td>
            
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