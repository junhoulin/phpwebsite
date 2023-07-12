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
        <form  action="script.php?signcheckup=signcheckup" method="POST" > 
        <h2>創建帳號</h2>  
            <?php if(isset($_GET['error'])) { ?> 
                <p class="error"><?php echo $_GET['error'] ?></p>
            <?php } ?> 

            <?php if(isset($_GET['success'])) { ?> 
                <p class="success"><?php echo $_GET['success'] ?></p>
            <?php } ?> 

            
            <label>名字</label>
            <?php if(isset($_GET['name'])) { ?> 
                <input type="text"
                       name="name" 
                       value="<?php echo $_GET['name']; ?>"><br>
            <?php }else{ ?> 
                <input type="text" 
                       name="name" 
                       ><br>
            <?php }?> 

            <label>郵件</label>
            <?php if(isset($_GET['mail'])) { ?> 
                <input type="text"
                       name="mail" 
                       value="<?php echo $_GET['mail']; ?>"><br>
            <?php }else{ ?> 
                <input type="text" 
                       name="mail" 
                       ><br>
            <?php }?> 

            <label>帳號</label>
            <?php if(isset($_GET['accon'])) { ?> 
                <input type="text"
                       name="account" 
                       value="<?php echo $_GET['accon']; ?>"><br>
            <?php }else{ ?> 
                <input type="text" 
                       name="account" 
                       ><br>
            <?php }?> 

            <label>密碼</label>
            <input type="password" name="password"><br>
            <label>再輸入一次密碼</label>
            <input type="password" name="repassword"><br>
            <button type="submit" class="submit">確認</button>
            <a href="login.php" class="ca">登入帳號</a>
        </form>   
</body>
</html>