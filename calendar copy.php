<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Martel:wght@600&display=swap');

     body{
        padding:20px;
        margin:auto;
        text-align:center;
        /* font-family: arial,'Microsoft JhengHei', serif; */
        display:flex;
        /* box-sizing:border-box; */
    }

    table,tr,td{
        margin:auto;
        border:1px solid #ccc;
        padding:20px 0;
        line-height:3rem;
        box-sizing:border-box;
        font-size:1.5rem;  
    }

    table td:first-child,td:last-child{
        color:red;
    }
    
    table{
        width:60vw;
    }

    table td:hover{
            background:lightblue;
        }

    /* td{
        font-style:italic;
    } */

    .left{
        /* width:30vw; */
        border:1px solid #ccc;
        color:#fff;
    }

    p{
        font-size:2rem;
        padding:20px;
    }

    .f1{
        font-family: 'Martel', serif;
    }

    img {
        width: 100%;
        height: auto;
}
  </style>

</head>
<body>
<?php
//當前年
// $year=$_GET['y']?$_GET['y']:date('Y');   //三元運算子

//當前月
// $month=$_GET['m']?$_GET['m']:date('m');

if(isset($_GET['month'])){   //當前月
    $month=$_GET['month'];
}else{
    $month=date('m');
}
if(isset($_GET['year'])){    //當前年
    $year=$_GET['year'];
}else{
    $year=date('Y');
}


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

<div class="left text-light bg-secondary font-weight-bolder p-3 m-3">
    <p>Book of the Month </p><img src="c11.jpg" alt="cover">
</div>


<div class="f1 m-3">
<h1 class="" >
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

        ?>
        </h1>
        <h1>&nbsp;&nbsp;<?php echo $year ?></h1>

        <table class=" f1 border shadow p-3 mb-5 bg-white rounded-lg">            
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
            $holiday=[
                '01-07'=>'Lucky Day',
                '02-07'=>'Lucky Day',
                '03-07'=>'Lucky Day',
                '04-07'=>'Lucky Day',
                '12-31'=>'這是今年最後一天'
                
            ];
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
            <!-- <a href="Calendar.php?year=<?php echo $prevYear ?>">上一年</a> -->
            <button type="button" class="btn btn-light btn-lg p-3 "> <a href="calendar copy.php?year=<?php echo $prevYear ?>&month=<?php echo $prevMonth ?>">&laquo;prev</a></button>
            <button type="button" class="btn btn-light btn-lg p-3 "><a href="calendar copy.php?year=<?php echo $nextYear ?>&month=<?php echo $nextMonth ?>">next&raquo;</a></button>
            <!-- <a href="Calendar.php?year=<?php echo $nextYear ?>">下一年</a> -->
        </h3>
</div>
</body>
</html>