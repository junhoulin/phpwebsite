<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            session_start();

            if(isset($_SESSION['account'])){
        ?>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>衛達人事系統</title> 
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
        <link rel="stylesheet" type="text/css" href="cssstyle/style101.css">  
        <link rel="stylesheet" href="cssstyle/table.css"> 
        <!-- jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <!--圖標-->
        <script src="https://kit.fontawesome.com/8a17a816b1.js" crossorigin="anonymous"></script>
        <!-- 表格的CDN -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <!-- php -->
        <?php require_once 'connect.php'; ?>
        <?php
            // sql語法存在變數中
            $sql = "SELECT * FROM `db06` ";
            // 用mysqli_query方法執行(sql語法)將結果存在變數中
            $result = mysqli_query($link,$sql);
        ?>

    </head>
    <body> 
        <div class="container-fluid">
            <div  class="row" >
                <div class="col-2 sidemenu">   
                    <h1><a><img class="logo" src="img\logo.png"></a></h1>       
                    <nav>
                        <a href="index101.php"><i class="fa-solid fa-file"></i> 人事資料</a>
                        <a href="index102.php"><i class="fa-solid fa-file-import"></i> 薪水資料</a>
                        <a href="index103.php"><i class="fa-solid fa-file-import"></i> 更改資料</a>
                        <a href="#"><i class="fa-solid fa-cat"></i> 高級設定</a>
                        <a href="script.php?logout=logout"><i class="fa-solid fa-mosquito"></i>無敵登出</a>
                        <a>Hello,<?php echo $_SESSION['name']; ?></a>
                    </nav>                   
                </div>
                <div class="col-10 ">
                    <div class="header">     
                                <h1><a><img class="headlogo" src="img\title1.png"></a></h1>
                    </div>
                    <div class="table102" id="table102"> 
                        <table id="table_id" class="display compact cell-border hover">
                                <thead style="text-align:center;">
                                    <tr style="text-align:center;">
                                        <th>ID</th>
                                        <th>姓名</th>
                                        <th>一月</th>
                                        <th>二月</th>
                                        <th>三月</th>
                                        <th>四月</th>
                                        <th>五月</th>
                                        <th>六月</th>
                                        <th>七月</th>
                                        <th>八月</th>
                                        <th>九月</th>
                                        <th>十月</th>
                                        <th>十一月</th>
                                        <th>十二月</th>
                                        <th>年終獎金</th>
                                        <th>總額</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- 大括號的上、下半部分 分別用 PHP 拆開 ，這樣中間就可以純用HTML語法-->
                                    <?php
                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            foreach($result as $row)
                                            {
                                    ?>
                                                    <tr>
                                                        <!-- $row['(輸入資料表的欄位名稱)'];  <<用雙引號也行 -->
                                                        <td><?php echo $row['nameid']; ?></td> 
                                                        <td><?php echo $row['name']; ?></td> 
                                                        <td><?php echo $row['twomonuth']; ?></td>
                                                        <td><?php echo $row['threemonuth']; ?></td> 
                                                        <td><?php echo $row['fourmonuth']; ?></td> 
                                                        <td><?php echo $row['fivemonuth']; ?></td>
                                                        <td><?php echo $row['sixmonuth']; ?></td> 
                                                        <td><?php echo $row['sevenmonuth']; ?></td> 
                                                        <td><?php echo $row['eightmonuth']; ?></td>
                                                        <td><?php echo $row['ninemonuth']; ?></td> 
                                                        <td><?php echo $row['tenmonuth']; ?></td> 
                                                        <td><?php echo $row['再次離職']; ?></td>
                                                        <td><?php echo $row['elevenmonuth']; ?></td>
                                                        <td><?php echo $row['twelvemonuth']; ?></td>
                                                        <td><?php echo $row['finalmonuth']; ?></td>
                                                        <td><?php echo $row['totalmonuth']; ?></td>
                                                    </tr>
                                    <?php
                                        }
                                        }
                                    ?>
                                </tbody>
                        </table>
                    </div>
                </div>      
                
                                   
            </div>
            </div>
            

        </div>                              
    </body>
        <!--javascript -->
        <script src="script.js"></script>
</html>



<?php
}else{
    header("Location: index.php?error=nononononono");
    exit();
}
?>



<!-- 色號 = #51a4db -->