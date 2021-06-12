
<?php

if (isset($_POST['myhand'])) {
    $userHand=(int)$_POST['myHand'];

    // コンピューターが出す手を決める
    $handTypes = ['rock', 'scissors', 'paper'];
    $handImages = ['rock' => 'hand0.png', 'scissors' => 'hand1.png', 'paper' => 'hand2.png'];
    $results=['あいこ','アナタの勝ちです!','アナタの負けです！'];

    $number = mt_rand(0, 2);
    $computerHand = $handTypes[$number];

    $computerHandImage = $handImages[$handTypes[$number]];
    $userHandImage = $handImages[$userHand];

    // 勝敗を判定
    if ($userHand === $computerHand) {
        $winnerFlag = 0;
    } elseif ($userHand === 0 && $computerHand === 1) {
        $winnerFlag = 1;
    } elseif ($userHand === 1 && $computerHand === 2) {
        $winnerFlag = 1;
    } elseif ($userHand === 2 && $computerHand === 0) {
        $winnerFlag = 1;
    } else {
        $winnerFlag = 2;
    }
}


?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけん</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style02.css">   
    
</head>

<body>

    <h3 class="text-center">じゃんけんゲーム</h3>
    
    <div class=table__frame>
    <table  width="600px">
        <tr height="200" valign="middle"> 

            <th width="200" height="200" ><div id="ahand">

            <!-- 自分のハンド画像  -->

            <img src="<?php echo $userHandImage; ?>" width="100"  />

            </div></th>

            <th >VS</th>

            <th width="200" height="200" ><div id="bhand">

            <!-- PCのハンド画像  -->
            
            <img src="<?php echo $computerHandImage; ?>" width="100"  />

            </div></th>
        </tr>
        <tr>
            <th>自分</th>
            <th>&nbsp;</th>
            <th>相手</th>
        </tr>
        <tr>
            <th colspan="3">&nbsp;</th>
        </tr>
        <tr>
            <th colspan="3"></th>
        </tr>
    </table>
    </div>

    <div class="table__frame02">

   
 
        <form action="janken.php" method="post">
            <table width="350px">
           
            <tr>
            <th><button type="submit" name="myHand" value="rock">グー</button></th>
            <th><button type="submit" name="myHand" value="scissor">チョキ</button></th>
            <th><button type="submit" name="myHand" value="paper">パー</button></th>
            <th colspan="3"><button type="submit" name="reset">リセット</button></th>
            </tr>

            </table>

            <!-- <h3 class="text-center" colspan="3"> <div id="message"><?=$results[$winnerFlag]?></div></h3> -->

        </form>
    </div>

</body>    

</html>