<html>
    <head>
        <?php session_start(); ?>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php
            if(isset($_POST['title']))
            {
                $title = nl2br($_POST['title']);
                if(isset($_POST['text']))
                {
                    $text = nl2br($_POST['text']);
                    if($text != "" || $title != "")
                    {
                        if($text == "")
                        $text = "No text here";
                        if($title == "")
                            $title = "No Title";
                        require_once("variabili_conn.php");
                        $idUser = $_SESSION['idUser'];
                        $data   = date("Y-m-d");
                        echo $data;
                        $idUser = mysqli_real_escape_string($con, $idUser);
                        $title = mysqli_real_escape_string($con, $title);
                        $text = mysqli_real_escape_string($con, $text);
                        $sql = "INSERT INTO tmemo (idUser, titolo, testo, datains) VALUES ('$idUser', '$title', '$text', '$data')";
                        mysqli_query($con, $sql);
                        mysqli_close($con);
                    }
                    header("Location: notes_list.php");
                    exit;
                }
            }
        ?>
    </body>
</html>