<?php
    // $lunchMen =  array("초밥", "유부초밥", "김밥", "냉면", "라면", "돈까스", "쫄면");
    // $randMenu = $lunchMen[array_rand($lunchMen)];
    // echo $randMenu;
    
    // for ($i=0; $i < 7; $i++) { 
    //     echo $lunchMen[$i];
    //     echo " ";
    // }
    
    $month = range(1, 12);
    $week = array("일", "월", "화", "수", "목", "금", "토");
    $day = range(1, 31);
    echo $month[array_rand($month)],"월", " ";
    echo $day[array_rand($day)],"일", " ";
    echo $week[array_rand($week)],"요일", "\n";
    
    // 두 날짜 사이의 임의의 날짜를 생성
    function randomDate($start_date, $end_date){
        // 타임 스탬프로 변환
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        // 위에서 얻은 타임 스탬프 값을 사용하여 난수 생성
        $val = rand($min, $max);

        // 원하는 날짜 형식으로 다시 변환
        return date('Y-m-d', $val);
    }

    $start_date = '2023-03-01';
    $end_date = '2023-08-01';

    echo randomDate($start_date, $end_date), "\n";

    $arrayName = array("key1" => "val1", "key2" => "var2" );
    echo $arrayName["key1"];
?>