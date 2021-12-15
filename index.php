<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная №10, вариант 7</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите элементы массива через запятую:</p>
        <input type="text" name="n" value="1, 2, 3">
        <input type="submit" value="OK">
    </form>
    <?php
        $n=$_POST["n"];
        $myArray = explode(", ", $n);

        $indMax=0;
            for($i=1; $i<count($myArray); $i++){
                if($myArray[$i]>$myArray[$indMax]){
                    $indMax=$i;
                }
            }

         //Произведение элементов массива, располоенных между первым и вторым нулевыми элементами
        $first0El;
        $second0El;
        for($i=0; $i<count($myArray); $i++){
            if($myArray[$i]==0){
                $first0El=$i;
                for($l=$i+1; $l<count($myArray); $l++){
                    if($myArray[$l]==0){
                    $second0El=$l;
                    break;
                    }
                }
                break;
            }
        }

        $proizv=1;
        for($i=$first0El+1; $i<$second0El; $i++){
            $proizv*=$myArray[$i];
        }

        //массив, где сначала стоят элементы, которые стояли в нечетных позициях, а затем элементы, стоявшие на четных позициях
        $chet=[];
        $nechet=[];
        for($l = 0;$l<count($myArray); $l++){
            if($l%2==0){
                $chet[]=$myArray[$l];
            }
            else{
                $nechet[]=$myArray[$l];
            }
        }
        $myArray=array_merge($nechet, $chet);

        
        echo "Индекс максимального элемента: ".$indMax."; Произведение элементов массива, располоенных между первым и вторым нулевыми элементами: ".$proizv."; Массив, где сначала стоят элементы, которые стояли в нечетных позициях, а затем элементы, стоявшие на четных позициях: </br>";
        for($m=0; $m<count($myArray); $m++){
            echo $myArray[$m]."; ";
        }
    ?>
</body>
</html>
