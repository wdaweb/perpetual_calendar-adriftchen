<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
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
        line-height:3rem;
        /* border-collapse:collapse; */
    }
    table td:first-child,td:last-child{
        color:red;
    }
    /* th{
        
    } */
    table{
        width:700px;
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
        width: 150px;
}
  </style>

</head>
<body>
<?php
//當前年
$year=$_GET['y']?$_GET['y']:date('Y');

//當前月
$month=$_GET['m']?$_GET['m']:date('m');

// if(isset($_GET['month'])){   //當前月
//     $month=$_GET['month'];
// }else{
//     $month=date('m');
// }
// if(isset($_GET['year'])){    //當前年
//     $year=$_GET['year'];
// }else{
//     $year=date('Y');
// }


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

<div class="container mx-3">
    <div class="d-inline-block  text-light bg-secondary font-weight-bolder p-3 m-3">
    <p>Book of the Month </p><img src="c11.jpg" alt="cover">
    </div>

<div class="d-inline-block ">
<span><h1 class="text-center " >
    <?php
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

        ?></span></h1>
            <h1>&nbsp;&nbsp;&nbsp;<?php echo $year ?></h1>

        <table class=" border shadow p-3 mb-5 bg-white rounded-lg">            
        <!-- <table class=" border border-dark shadow cellspacing='0' p-3 mb-5 bg-white rounded-lg"> -->
                <tr>
                <td>日</td>
                <td>一</td>
                <td>二</td>
                <td>三</td>
                <td>四</td>
                <td>五</td>
                <td>六</td>
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
            <!-- <a href="Calendar.php?y=<?php echo $prevYear ?>">上一年</a> -->
            <button type="button" class="btn btn-light btn-lg p-3 "> <a href="calendar.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">prev</a></button>
            <button type="button" class="btn btn-light btn-lg p-3 "><a href="calendar.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">next</a></button>
            <!-- <a href="Calendar.php?y=<?php echo $nextYear ?>">下一月</a> -->
        </h3>
</div>
</div>
</body>
</html>