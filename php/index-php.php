<?php
require __DIR__ . "/../database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php include_once __DIR__ . "/../partials/header.php"; ?>  

    <?php include_once __DIR__ . "/../partials/header.php"; ?>  

    <main>
        <section class="container">
            <?php foreach ($faqs as $faq) { ?>
                <h2><?php echo $faq["question"]; ?></h2>
                <p><?php echo $faq["answer"]; ?></p>
            <?php } ?>
        </section>

        <?php
        
        $another_number = 10;

        function sumNumbers($first_number, $second_number, $third_number = 0) {
            return $first_number + $second_number + $third_number;
        }

        $result = sumNumbers(4, 7, 1);
        var_dump($result);
        
        ?>
    </main>


    <footer>

    </footer>

</body>

</html>