<?php
// print_r($_SERVER);
$url = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <p>Lorem ipsum dolor sit amet.</p>
    <a href="<?php echo $url ?>">URL</a>
</body>

</html>