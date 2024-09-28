<?php
if (isset($_POST['submit'])) {
    echo $_POST['name'];
} else {
    echo "Invalid Name";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        font-family: sans-serif;
    }

    .container {
        height: 24rem;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .holder {
        display: flex;
        flex-direction: column;
    }

    .hero {
        position: relative;
        left: 30%;
        top: 30px;
    }

    .holder input[type="text"] {
        height: 30px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 20px;
        border-bottom: 2px solid green;
    }

    .holder input[type="submit"] {
        display: block;
        height: 32px;
        font-size: 20px;
        color: #ffff;
        border: 1px solid black;
        width: 250px;
        outline: none;
        background: crimson;
    }

    .footer {
        position: relative;
        left: 550px;
        top: 50px;

    }
</style>

<body>
    <h1 class="hero">
        <?php echo "💥 Hey, Fill this form💥" . $_POST['name'] . "💥"; ?>
    </h1>

    <div class="container">
        <div class="holder">
            <form action="index.php" method="post">
                <div class="wrapper">
                    <input type="text" name="name" placeholder="Enter Username">
                </div>

                <br>
                <br>
                <div class="wrapper">
                    <button class="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
    <h1 class="footer">Made by <span>💢💢</span>Love Jones</h1>
</body>

</html>