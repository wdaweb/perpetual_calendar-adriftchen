<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- <script src="plugins/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="plugins/bootstrap.bundle.min.js"></script> -->
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


</style>
<body>
<?php 
//當前年
$year=$_GET['y']?$_GET['y']:date('Y');

//當前月
$month=$_GET['m']?$_GET['m']:date('m');


//當前月1號的Unix 時間戳
$firstDay=strtotime("{$year}-{$month}-1");

//當前月天數
$days=date('t',$firstDay);

//當前月1號是幾周
$week=date('w',$firstDay);

//下一年和下一月
$nextYear=$year;
$nextMonth=$month+1;
if($nextMonth>12){
    $nextYear=$year+1;
    $nextMonth=1;
}

//上一年和上一月
$prevYear=$year;
$prevMonth=$month-1;
if($prevMonth<1){
    $prevYear=$year-1;
    $prevMonth=12;
}

?>

</head>
<body class=" text-dark bg-light ">
    <div class="left bg-secondary font-weight-bolder p-3 m-3">
<h3>Book of the Month </h3>
    <img src="cover.jpg" alt="cover">
    </div>
        <div >
            <h2 class="color:orange"><?php echo $year ?>年<?php echo $month ?>月</h2>

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
        <h3>
            <!-- <a href="perCalendar.php?y=<?php echo $prevYear ?>">上一年</a> -->
            <a href="perCalendar.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">上一月</a>
            <a href="perCalendar.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">下一月</a>
            <!-- <a href="perCalendar.php?y=<?php echo $nextYear ?>">下一月</a> -->
        </h3>
    </div>
    
</body>
</html>
</body>
</html>
