<html>
    <head>
        <?php session_start(); ?>
    </head>

    <body>
        <?php
            if(isset($_POST['title']))
            {
                $title = $_POST['title'];
                if(isset($_POST['text']))
                {
                    $text = $_POST['text'];
                    if($text == "")
                        $text = "No text here";
                    if($title == "")
                        $title = "No Title";
                    $com = mysqli_connect("localhost", "root", "", "memo2");
                    $idUser = $_SESSION['idUser'];
                    $data   = date("Y-m-d");
                    $sql = "INSERT INTO tmemo (idUser, titolo, testo, datains) VALUES ('$idUser', '$title', '$text', '$data')";
                    mysqli_query($com, $sql);
                    mysqli_close($com);
                    header("Location: notes_list.php");
                    exit;
                }
            }
        ?>
    </body>
</html>