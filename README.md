# PHP的簡易人事系統

## 設定步驟
* 下載phpmyadmin https://www.phpmyadmin.net/
* 設定放在Localhost:85
* 將前端網站放進wWW資料夾中
* 使用php將網站連結mysql資料庫

```php
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
* 登入系統
* 資料庫資料運用
* session、post、php、html、css、mysql

![登入畫面]( https://plum-romantic-goldfish-871.mypinata.cloud/ipfs/QmccbLaVsJG3bhFVfh8gEEgUqE6UBuHSLZhUZ7b76WJKyi?_gl=1*1kar73p*_ga*MTAzMTAxODAyMy4xNjg5MTQyNDU0*_ga_5RMPXG14TE*MTY4OTE0MjQ1NC4xLjEuMTY4OTE0MjU3Ni4yNC4wLjA. "登入畫面")
![系統畫面]( https://plum-romantic-goldfish-871.mypinata.cloud/ipfs/Qme2arCbL72fmuZW7SiNXZGHiq2s2qoGGyoAyn8ZUyfQZV?_gl=1*1cip0fj*_ga*MTAzMTAxODAyMy4xNjg5MTQyNDU0*_ga_5RMPXG14TE*MTY4OTE0MjQ1NC4xLjEuMTY4OTE0MjU3Ni4yNC4wLjA. "系統畫面")

