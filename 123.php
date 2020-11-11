<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<style>
    body{
        padding:20px;
        margin:auto;
        text-align:center;
        font-family: arial,'Microsoft JhengHei', serif;
        display:flex;
        box-sizing:border-box;
    }

    table,tr,td{
        margin:auto;
        border:1px solid #ccc;
        padding:20px 0;
        /* border-collapse:collapse; */
    }
    table td:first-child,td:last-child{
        color:red;
    }
    th{
        line-height:3rem;
    }
    table{
        width:70vw;
    }
    table td:hover{
            background:lightblue;
        }
    .left{
        width:30vw;
        border:1px solid #ccc;
        color:#fff;
    }
    img {
        width: 100%;
        height: auto;
}



</style>

<body class=" text-dark bg-light ">
<div class="container my-1">
  <div class="row">
  <div class="col-4 left bg-secondary font-weight-bolder p-3 m-3 ">
    <div class="row"><h3>Book of the Month</h3></div>
    <div class="row p-3"><img src="c11.jpg" alt="cover"></div>
  </div>

  
    <div class="col-8">
    <div class="row ">      
    <span><h1 class="text-center" ><?php
            switch($month){
                case 1;
                echo "January";
                break;  
                case 2;
                echo "February";
                break;  
                case 3;
                echo "March";
                break;  
                case 4;
                echo "April";
                break;  
                case 5;
                echo "May";
                break;  
                case 6;
                echo "June";
                break;  
                case 7;
                echo "July";
                break;  
                case 8;
                echo "August";
                break;  
                case 9;
                echo "September";
                break;  
                case 10;
                echo "October";
                break;  
                case 11;
                echo "November";
                break;  
                case 12;
                echo "December";
                break;  
            }

        ?></span></h1><h1>&nbsp;&nbsp;&nbsp;<?php echo $year ?>年</h1>
        </div>


      <div class="row">
        <table border='1px' cellspacing='0' width='700px' class="shadow p-3 mb-5 bg-white rounded-lg">            
        <!-- <table class=" border border-dark shadow cellspacing='0' p-3 mb-5 bg-white rounded-lg"> -->
                <tr>
                <th class="text-danger">日</th>
                <th>一</th>
                <th>二</th>
                <th>三</th>
                <th>四</th>
                <th>五</th>
                <th class="text-danger">六</th>
            </tr>

            <?php 
                for($i=(1-$week);$i<=$days;){
                    echo '<tr>';
                        for($j=0;$j<7;$j++,$i++){
                            if($i>$days || $i<1){
                                echo "<td>&nbsp;</td>"; 
                            }else{
                                echo "<td>{$i}</td>"; 
                            }
                        }
                    echo '</tr>';
                }
             ?>
        </table>
        </div>
        <div class="row">
        <h3>
            <!-- <a href="perCalendar.php?y=<?php echo $prevYear ?>">上一年</a> -->
            
            <button type="button" class="btn btn-light btn-lg p-3"> <a href="perCalendar.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">pre</a></button>
            <button type="button" class="btn btn-light btn-lg p-3"><a href="perCalendar.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">next</a></button>
            
            <!-- <a href="perCalendar.php?y=<?php echo $nextYear ?>">下一月</a> -->
        </h3>
        </div>
    </div>

</div>


</body>
</html>

