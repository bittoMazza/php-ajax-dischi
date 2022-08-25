<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>PHP Albums</title>
</head>
<body>
    <header>
        <div class="header-container">
            <i class="bi bi-spotify spotify-icon"></i>
        </div>
    </header>
    <main>
    <div class="container py-5">
      <!--   <div class="d-flex justify-content-around">
            <SelectedGenre
            :albums="albumsGenre" 
            @selectGenre="SearchByGenre"/>
            <SelectedArtist
            :albums="albumsArtist"
            @selectArtist="SearchByArtist"/> -->
        </div>
        <div class="row">
           <!--  <AlbumCard v-for="(cardInfo,index) in filteredCards" 
            :key="index"
            :cardInfo="cardInfo"
            /> -->
        </div>  
    </div>
    </main>
</body>
</html>