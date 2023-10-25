<!DOCTYPE html>
<html>
<head>
    <title>Mail Me!!!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #060606ab;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        #box {
            border: 2px solid #ccc;
            margin-top: 15%;
            width: 40%;
            padding: 20px;
            background-color: #060606ab;
            box-shadow: 5px 6px 5px white;
        }

        .txtbox {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 2px 2px 2px #cbe5cb;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            
        }

        @media screen and (max-width: 600px) {
            html {
                font-size: 120%;
            }

            #box {
                margin-top: 0;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <center>
        <form id="box" action="mail.php" method="GET">
            <h2>Mail Me!!!</h2>
            <input type="text" name="to_mail" placeholder="Enter your friend's email" class="txtbox">
            <br>
            <input type="text" name="from_mail" placeholder="Enter your email" class="txtbox">
            <br>
            <input type="text" name="sub_mail" placeholder="Enter Subject..." class="txtbox">
            <br>
            <input type="text" name="message_mail" placeholder="Write the message..." class="txtbox">
            <br>
            <input type="submit" value="SEND">
        </form>
    </center>
</body>
</html>
