<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD-Task-1</title>
    <link rel="stylesheet" href="assets/css/page1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk&family=Share+Tech&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="character-enemy-container">
            <div class="characters">
                <img src="assets/img/Furina.png" alt="Character 1" class="character">
                <img src="assets/img/Skirk.png" alt="Character 2" class="character2">
            </div>
            <div class="game-text">
                <h1>Genshin Impact Battle Simulator</h1>
                <?php
                $char1 = "Furina";
                $char2 = "Skirk";
                $hp1 = 100;
                $hp2 = 100;
                $dmg1 = 8;
                $dmg2 = 10;
                $plusdmg = 10;
                $enemy = "Ruin Guard";
                $ehp = 200;
                $eatk = 10;
                $isFrozen = false;
                $turn = 0;
                $hasCryo = false;
                $hasHydro = false;

                while ($ehp > 0) {
                    echo "Turn: " . $turn . "<br>";
                    echo $char1 . " | Hp: " . $hp1 . " | Atk: " . $dmg1 . "<br>";
                    echo $char2 . " | Hp: " . $hp2 . " | Atk: " . $dmg2 . "<br>";
                    echo $enemy . " | Hp: " . $ehp . " | Atk: " . $eatk . "<br><br>";
                    $ehp = $ehp - $dmg1;
                    $hasHydro = true;
                    echo $char1 . " dealt " . $dmg1 . " hydro dmg to " . $enemy . "! <br>";
                    $ehp = $ehp - $dmg2;
                    $hasCryo = true;
                    echo $char2 . " dealt " . $dmg2 . " cryo dmg to " . $enemy . "! <br>";
                    echo $enemy . " is now frozen!<br>";
                    if ($hasHydro == true) {
                        echo $char2 . " dealt additional " . $plusdmg . " cryo dmg to " . $enemy . "! <br>";
                    }
                    if ($hasHydro == true && $hasCryo == true) {
                        echo $enemy . " is frozen, " . $enemy . " can't move! <br><br>";
                        $hasCryo = false;
                        $hasHydro = false;
                    } else {
                        $hp1 = $hp1 - $eatk;
                        $hp2 = $hp2 - $eatk;
                        echo $enemy . " used spin attack and dealt " . $eatk . " to all characters <br><br>";
                    }
                    if ($ehp <= 0) {
                        echo "You win!<br>";
                    }
                    $turn++;
                }
                ?>
                <br>
                <a href="../index.php" class="btn-link">Back to Homepage</a>
            </div>

            <div class="enemy">
                <img src="assets/img/ruinGuard.png" alt="Enemy" class="enemy-img">
            </div>
        </div>
    </div>


</body>

</html>