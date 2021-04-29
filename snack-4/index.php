<div style="display: flex">
    <?php
        $class = [
            0 => [
                0 => [
                    "name" => "Dario",
                    "surname" => "Rossi",
                    "votes" => [10, 4, 8, 5.5]
                ],
                1 => [
                    "name" => "Michele",
                    "surname" => "Rossi",
                    "votes" => [9, 4, 5, 7]
                ],
                2 => [
                    "name" => "Andrea",
                    "surname" => "Rossi",
                    "votes" => [10, 6, 9, 2]
                ],
                3 => [
                    "name" => "Francesco",
                    "surname" => "Rossi",
                    "votes" => [7, 7, 7, 6]
                ]
            ],
            1 => [
                0 => [
                    "name" => "Franco",
                    "surname" => "Rossi",
                    "votes" => [8.5, 6, 4, 4.5]
                ],
                1 => [
                    "name" => "Fabio",
                    "surname" => "Rossi",
                    "votes" => [4, 4.5, 7, 7]
                ],
                2 => [
                    "name" => "Lorenzo",
                    "surname" => "Rossi",
                    "votes" => [8, 4, 9, 1]
                ],
                3 => [
                    "name" => "Fabiano",
                    "surname" => "Rossi",
                    "votes" => [5, 5, 3, 6]
                ]
            ]
        ];

        for ($i = 0; $i < count($class); $i++):
            for ($j = 0; $j < count($class[$i]); $j++):
                $average = 0;

                for ($k = 0; $k < count($class[$i][$j]["votes"]); $k++) {
                    $average += $class[$i][$j]["votes"][$k];
                }

                $average /= count($class[$i][$j]["votes"]);
                $average = round($average, 1);
        ?>

        <div style="display: flex; flex-direction: column; justify-content: center; margin-right: 3rem;">
            <h3>Name:</h3> <?php echo "<span>" . $class[$i][$j]["name"] . "</span>"; ?>
            <h3>Surname:</h3> <?php echo "<span>" . $class[$i][$j]["surname"] . "</span>"; ?>
            <h3>Average:</h3> <?php echo "<span>" . $average . "</span>"; ?>
        </div>

    <?php endfor; ?>
        <?php endfor; ?>
</div>
