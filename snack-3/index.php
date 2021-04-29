<div style="display: flex">
    <?php
        $posts = [
            "10/07/19" => [
                "title" => "Parliamo di cipolle coltivate in casa",
                "author" => "Pippo",
                "text" => "lorem ipsum dolor sit amet."
            ],
            "13/01/20" => [
                "title" => "La nuova ricotta casereccia di zio Nino",
                "author" => "Filippo",
                "text" => "lorem ipsum dolor sit amet."
            ],
            "21/03/20" => [
                "title" => "Basta post che non ho creatività",
                "author" => "Andrea",
                "text" => "lorem ipsum dolor sit amet."
            ]
        ];

        $index = ["10/07/19", "13/01/20", "21/03/20"];

        for ($i = 0; $i < count($posts); $i++): ?>

    <div style="display: flex; flex-direction: column; justify-content: center; margin-right: 3rem;">
            <h4>Date:</h4> <?php echo "<span>" . $index[$i] . "</span>"; ?>
            <h3>Title:</h3> <?php echo "<span>" . $posts[$index[$i]]["title"] . "</span>"; ?>
            <h3>Author:</h3> <?php echo "<span>" . $posts[$index[$i]]["author"] . "</span>"; ?>
            <h3>Text:</h3> <?php echo "<span>" . $posts[$index[$i]]["text"] . "</span>"; ?>
    </div>

    <?php endfor; ?>
</div>
