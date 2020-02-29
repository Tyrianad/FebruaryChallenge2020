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
<body class="d-flex justify-content-center align-items-center flex-column">
<?php
if(isset($_POST['tocheck'])&&$_POST['tocheck']!="")
{
    $to_check = filter_input(INPUT_POST,'tocheck',FILTER_SANITIZE_STRING);
    $content = file_get_contents('hashes.txt');
    $found = false;
    if($content && $content!="")
    {
        $hashed_values = explode(PHP_EOL,$content);
        foreach ($hashed_values as $hash)
        {
            if(password_verify($to_check,$hash))
            {
                $found=true;
                break;
            }
        }
    }

    ?>
    <?php
    if($found)
    {
        ?>
        <div class="alert alert-success text-center">
            <h4>String found</h4>
            <strong><?php echo $to_check ?></strong> -> <strong><i><?php echo $hash ?></i></strong>
        </div>
        <?php
    }
    else
    {
        ?>
        <div class="alert alert-danger text-center">
            The input string was not found.
        </div>
        <?php
    }
    ?>
    <?php
}

?>
<br>
<div class="jumbotron">
    <form method="post">
        <h4><strong>Enter the string you want to validate</strong></h4>
        <br>
        <div class="form-group">
            <input type="text" class="form-control" id="tocheck" name="tocheck" placeholder="String to check">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Check It!</button>
    </form>
</div>

</body>
</html>

