<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="../styles/style.css">
    <title>PHP Albums</title>
</head>
<body>
    <?php
        include '../database.php';
    ?>
    <div id="app">
        <header>
            <div class="header-container">
                <i class="bi bi-spotify spotify-icon"></i>
            </div>
        </header>
        <main>
            <div class="container py-5">
                <div class="row">
                    <?php
                        foreach($albumsInfo as $album)
                        {
                    ?>
                    <div class="card-album">
                        <img class="w-100" alt="Card image cap" src="<?=$album['poster'];?>">
                        <h4 class="album-title" >
                            <?php
                                echo $album['title'];
                            ?>
                        </h4>
                        <div class="text-muted">
                            <span class="d-block fs-4">
                                <?php
                                    echo $album['author'];
                                ?>
                            </span>
                            <span>
                                <?php
                                    echo $album['year'];
                                ?>
                            </span>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>  
            </div>       
        </main>
    </div>   
</body>
</html>

