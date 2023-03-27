<?php
    // $lunchMen =  array("초밥", "유부초밥", "김밥", "냉면", "라면", "돈까스", "쫄면");
    // $randMenu = $lunchMen[array_rand($lunchMen)];
    // echo $randMenu;
    
    // for ($i=0; $i < 7; $i++) { 
    //     echo $lunchMen[$i];
    //     echo " ";
    // }
    
    // $month = range(1, 12);
    // $week = array("일", "월", "화", "수", "목", "금", "토");
    // $day = range(1, 31);
    // echo $month[array_rand($month)],"월", " ";
    // echo $day[array_rand($day)],"일", " ";
    // echo $week[array_rand($week)],"요일", "\n";
    
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

    $start_date = '2023-04-01';
    $end_date = '2023-04-30';

    echo "4월달 초밥 먹는 날: ", randomDate($start_date, $end_date), "\n";

    // $arrayName = array("key1" => "val1", "key2" => "var2" );
    // echo $arrayName["key1"];

    $recipe = array("계란초밥" => "계란", "새우초밥" =>"새우", "장어초밥" =>"장어", "유부초밥" =>"유부", "연어초밥" =>"연어", "광어초밥" =>"광어", "참치초밥" =>"참치", "날치알초밥" =>"날치알", "문어초밥" =>"문어", "가리비초밥" =>"가리비", "북방조개초밥" => "북방조개");
    $randomSushi = array_rand($recipe);
    $ingredient = $recipe[$randomSushi];
    echo "메뉴: ",$randomSushi, ", 주재료: ", $ingredient, "\n";

    $multiDimention = array(
    range(1, 20),
    array("못 먹어", "맘껏 먹어")
    );
    echo "먹을 갯수: ", $multiDimention[0][9];

    //8번 출력 echo $arr_temp[1][3];
?>