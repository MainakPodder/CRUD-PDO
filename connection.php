<!-- 🎯 PHP Data Objact (PDO) -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- All Bootstrap Links -->
    <?php include "links/links.php" ?>

</head>

<body>
    <div class="container mt-3">
        <h1 class="text-center">
            <?php
            $dsn = "mysql:host=localhost; dbname=collage3;"; //dsn = Data Source Name
            $db_user = "root";
            $db_password = "";

            // Error Handling
            try {
                // Create Connection
                $conn = new PDO($dsn, $db_user, $db_password);
                echo ("🕺CONNECTION SUCCESSFULL<hr>");
            } catch (PDOException $e) {
                // echo "😪OOPS,CONNECTION FAILED<hr>" . $e->getMessage(); // 👉 For Debugging
                echo "😪OOPS,CONNECTION FAILED<hr>";
            }


            ?>
        </h1>
    </div>
</body>

</html>