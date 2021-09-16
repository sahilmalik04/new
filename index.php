<?php

$str = '1Q3e5s';

$shuffled = str_shuffle($str);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UserForm.in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="time">
        <p> There is a limit </p>
    <p> You Can fill the entries only in 3 minutes, If u will unable to fill the entries
        in 3 minutes, <br>The form will automatically disappears.
        The Countdown will appear below </p>
    <p id="timer"> </p>

    <!---- Form  ----->
    </div>
        <form class="frm mt-4" id="frm" action="message.php" method="POST">
            <table class="table table-sm table-borderless">

            <tr>            
            <td> <label for="name">Name: </label> </td>
            </tr>
            <tr>
            <td> <input type="text" id="name" placeholder="Enter Name" required="true" name="name"> </td>
            </tr>
            <tr>
            <td> <label for="email">Email:</label> </td>
            </tr>
            <tr>
            <td> <input type="email" id="email" placeholder="Enter Email" required="true"> </td>
            </tr>
            <tr>
                <td> <label for="DOB">Date of Birth:</label> </td>
            </tr>
            <tr>
           <td> <input type="date" id="DOB" placeholder="DOB" required="true"> </td>
            </tr>
            <tr>
            <td> <label for="about">About:</label> </td>
            </tr>
            <tr>
            <td> <input type="text" id="about" placeholder="About Yourself" required="true"> </td>
            </tr>
            <tr>
            <td> <label for="captcha"><br>Enter Captcha:</label>
             <input type="text" id="captcha" placeholder="Enter Captcha" required="true">
             </td>

            <td> <label for="captcha_code"><br>Captcha Code:</label>&nbsp; 
            <h5 class="text-success">
            <?php echo $shuffled ?> </td>
            </h5>
            </tr>

            <tr>
                <td> <br>
            <button class="btn btn-primary" name="submit"> Submit </button>
                </td>
            </tr>
            </table>
        </form>
    <!---- Form End ---->
</body>
</html>

<!-- Script to Start Timer -->
<script>
         window.onload = function () {
            var minute = 2;
            var sec = 60;
            var myVar = setInterval(function () {
               document.getElementById("timer").innerHTML =
                  minute + " : " + sec;
               sec--;
               if (sec == 00) {
                  minute--;
                  sec = 60;
                  if (minute < 0) {
                     alert('Time Over');
                     clearInterval(myVar);
                     document.getElementById('frm').style.display="none";
                  }
               }
            },1000);
         };
</script>
<!--- Script Ends --->


