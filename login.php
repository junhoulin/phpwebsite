<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>衛達人事系統</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
    <link rel="stylesheet" type="text/css" href="cssstyle/login.css">  
</head>
<body>  



        <form  action="script.php?login=login " method="POST" > 
        <h2>登入帳號</h2>  
            <?php if(isset($_GET['error'])) { ?> 
                <p class="error"><?php echo $_GET['error'] ?></p>
            <?php } ?> 
            <label>帳號</label>
            <input type="text" name="account"><br>
            <label>密碼</label>
            <input type="password" name="password"><br>
            <button type="submit" class="submit">確認</button>
            <a href="signup.php" class="ca">創建帳號</a>
        </form>   
</body>
</html>