<?php
session_start();

if (isset($_GET['login'])) {
    loginFunction();
}else if (isset($_GET['logout'])) {
    logoutFunction();
}else if (isset($_GET['signcheckup'])) {
    signcheckup();
}


function loginFunction() {
    include "connect.php";

    if(isset($_POST['account']) && isset($_POST['password'])) {
        
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


        $accon = validate($_POST['account']);
        $pass = validate($_POST['password']);

        if(empty($accon)){
            header("Location: login.php?error=UserName is required");
            exit();
        }else if(empty($pass)){
            header("Location: login.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM db02 WHERE account = '$accon' AND password = '$pass'" ;
            $result = mysqli_query($link,$sql);

            if(mysqli_num_rows($result)===1){
                $row = mysqli_fetch_assoc($result);
                if($row['account'] === $accon && $row['password']===$pass){
                    $_SESSION['account'] = $row['account'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location:index101.php");
                    exit();
                }
            }else{
                header("Location: login.php?error=Incorrect account or password");
                exit();
            }
        }

    }
}

function logoutFunction(){
    session_start();

    session_unset();
    session_destroy();
    header("location:login.php"); 

}

function signcheckup(){
    include "connect.php";

    if(isset($_POST['name']) && isset($_POST['mail']) && 
        isset($_POST['account']) && isset($_POST['password'])&& isset($_POST['repassword'])) {
        
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name= validate($_POST['name']);
        $mail = validate($_POST['mail']);
        $repass= validate($_POST['repassword']);
        $accon = validate($_POST['account']);
        $pass = validate($_POST['password']);

        $user_data = '&name='.$name.'&mail='.$mail.'&accon='.$accon;

        if(empty($name)){
            header("Location: signup.php?error=Name is required&$user_data");
            exit();
        }else if(empty($mail)){
            header("Location: signup.php?error=Mail is required&$user_data");
            exit();
        }else if(empty($accon)){
            header("Location: signup.php?error=UserName is required&$user_data");
            exit();
        }else if(empty($pass)){
            header("Location: signup.php?error=Password is required&$user_data");
            exit();
        }else if(empty($repass)){
            header("Location: signup.php?error=Repassword is required&$user_data");
            exit();
        }else if($pass !== $repass){
            header("Location: signup.php?error=not common password&$user_data");
            exit();
        }else{
            $sql = "SELECT * FROM db02 WHERE account = '$accon' " ;
            $result = mysqli_query($link,$sql);

            if(mysqli_num_rows($result) > 0){
                header("Location: signup.php?error= change your UserName because your
                UserName be common&$user_data");
                exit();
            }else{
                $sql2 ="INSERT INTO db02(name,email,account,password) 
                VALUES('$name','$mail','$accon','$pass')" ;
                $result2 = mysqli_query($link,$sql2);
                if($result2){
                    header("Location: signup.php?success=Your account has been created successfully");
                    exit();
                }else{
                    header("Location: signup.php?error=unknown error&$user_data");
                    exit();
                }
            }
        }

    }
}


?>