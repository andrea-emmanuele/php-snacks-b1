<?php
    $matches = [
        0 => [
            "homeTeam" => ["teamName" => "Italy", "points" => 21],
            "guestTeam" => ["teamName" => "Argentina", "points" => 14]
        ],
        1 => [
            "homeTeam" => ["teamName" => "Netherlands", "points" => 4],
            "guestTeam" => ["teamName" => "France", "points" => 19]
        ],
        2 => [
            "homeTeam" => ["teamName" => "Spain", "points" => 11],
            "guestTeam" => ["teamName" => "China", "points" => 16]
        ]
    ];

    for ($i = 0; $i < count($matches); $i++):
    ?>

<p>
    <?php echo $matches[$i]["homeTeam"]["teamName"] . " - ";
          echo $matches[$i]["guestTeam"]["teamName"] . " | ";
          echo $matches[$i]["homeTeam"]["points"] . "-";
          echo $matches[$i]["guestTeam"]["points"];
    ?>
</p>

<?php endfor; ?>
