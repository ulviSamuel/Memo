<html>
    <head>
        <link rel="stylesheet" href="css/notes_list_style.css">
        <meta charset="ISO-8859-1">
    </head>

    <body>
        <h1 id="title">Note</h1>
        <?php
            $con = mysqli_connect("localhost", "root", "", "memo2");
            $sql = "SELECT titolo, testo FROM tmemo tm WHERE tm.titolo != '' OR tm.testo != '' ORDER BY titolo ASC, testo ASC";
            $res = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    echo "<div class='tile'>";
                    echo "<h2 class='tile_title'>".$row['titolo']."</h2>";
                    if(strlen($row['testo']) < 20)
                        echo "<p class='tile_text_piece'>".$row['testo']."</p>";
                    else
                        echo "<p class='tile_text_piece'>".substr($row['testo'], 0, 20)."...</p>";
                    echo "</div>";
                }
            }
        ?>
        <a href="new_note.html"><button id="floating_button">+</button></a>
    </body>
</html>