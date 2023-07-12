# PHP的簡易人事系統

## 設定步驟
* 下載phpmyadmin https://www.phpmyadmin.net/
* 設定放在Localhost:85
* 將前端網站放進wWW資料夾中
* 使用php將網站連結mysql資料庫
```
<?php
  $host = 'localhost';
  $port = '85';
  $dbuser ='root';
  $dbpassword = '12345678';
  $dbname = 'junhoudb';
  $link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

  if(!$link){
    echo "cannot connect to the database";
    exit;
  }
?>
```

## 功能亮點
* 