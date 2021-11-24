<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <link rel="stylesheet" href="./js/Script.js" />
    <title>Employee management system</title>
</head>

<body>
    <form action="register.php" method="POST">
        <div class="ems">
            <div class="main-page">
                <div class="sys">
                    <div class="form-page">
                        <div class="logo">
                            <img src="./images/EMS4.png" alt="EMS logo" />
                        </div>
                        <script type="text/javascript">
                        document.write(
                            '<p>Current date and time is: <span id="date-time">',
                            new Date().toLocaleString(),
                            "<\/span>.<\/p>"
                        );
                        if (document.getElementById)
                            onload = function() {
                                setInterval(
                                    "document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()",
                                    50
                                );
                            };
                        </script>
                        <h3>Enter employee ID Number</h3>
                        <br />
                        <input type="text" placeholder="enter ID" name="employee_number" required /><br />&nbsp;
                        <input type="datetime-local" name="time_in"> <button id="btn" type="submit">Time
                            in</button>
                        &nbsp;<input type="datetime-local" name="time_out"> <button id="btn" type="submit">
                            Time out
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>