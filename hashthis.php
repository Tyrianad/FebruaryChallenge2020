<html>
<head>
    <title>HowToCodeWell - February Challenge 2020</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html,body{
            height:100vh;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center">
<?php
if(isset($_GET['string'])&&$_GET['string']!="")
{
    $tohash = filter_input(INPUT_GET,'string',FILTER_SANITIZE_STRING);
    $wb = file_put_contents('hashes.txt',password_hash($tohash,PASSWORD_DEFAULT).PHP_EOL,FILE_APPEND);
    if(is_numeric($wb)&&$wb>0)
    {
        ?>
        <div class="alert alert-success text-center">
            String hashed correctly.
        </div>
        <?php
    }
    else
    {
        ?>
        <div class="alert alert-danger text-center">
            There was an error while hashing your string.
        </div>
        <?php
    }
}
else
{
    ?>
    <div class="alert alert-info">
        <h4>Web request</h4>

        /hashthis?string=helloworld
    </div>
<?php
}
?>
</body>
</html>

