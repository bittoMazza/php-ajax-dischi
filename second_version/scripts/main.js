const app = new Vue({
    el: '#app',
    data: {
      albumsInfo : [],
      albumsGenre: [],
    },
    methods :{
        getCardInfo() {
            axios.get('../controller.php')
              .then( (result) => {   
                    this.albumsInfo = result.data;
                    this.createGenreArray(this.albumsInfo);
                  })                   
        },

        createGenreArray(albumArray){
          for(let i = 0; i < albumArray.length ; i++){
              if(!this.albumsGenre.includes(albumArray[i].genre)){
                  this.albumsGenre.push(albumArray[i].genre);
              }
          }
        },

        getGenreAlbums(genreSelected){
          axios.get('../controller.php/?genre='+genreSelected+'')
          .then( (result) => {   
                this.albumsInfo = result.data;
                this.createGenreArray(this.albumsInfo);
                console.log(this.albumsInfo)
              })  
        }
     },

     created(){
      this.getCardInfo();
     }

  })