<?php
    @include 'functions.php';

    $passLen = $_GET['passLen'];
?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>PHP Strong Password Generator</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
</head>

<body class="bg-dark text-white">
    <div class="container p-3 pt-5">
        <div class="d-flex flex-column gap-4">
            <h1 class="text-center text-decoration-underline">Strong Password Generator</h1>
            <div class="shadow rounded border p-5">
                <form action="index.php" method="GET">

                    <!-- PASS LENGTH -->
                    <div class="d-flex gap-3 align-items-center justify-content-center">
                        <label class="form-check-label" for="passInput">Lunghezza password:</label>
                        <input type="number" class="form-control col-3 w-auto" id="passInput" name="passLen" <?php echo "value='$passLen'" ?>>
                    </div>

                    <!-- BUTTONS -->
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-success">Genera</button>
                    </div>
                </form>
            </div>
        </div>
        <?php
        if($passLen){
        ?>
        <div class="shadow rounded border p-5 mt-3 text-center bg-light text-dark">
            <?php
            echo getPassword($passLen);
            ?>
        </div>
        <?php
        }
        ?>

    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
</body>

</html>