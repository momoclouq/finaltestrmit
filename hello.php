<html>
    <head>
    <title>hello</title>
    </head>

    <body>
    <form action="" method="POST">
    <input type="text" name="value" />
    <button type="submit">submit</button>
    </form>
    <?php

    $name = $_POST["value"];
    if(!empty($name)) echo "<div>Hello " . $name . "</div>";

    ?>
    </body>
</html>