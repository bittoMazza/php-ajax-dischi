const app = new Vue({
    el: '#app',
    data: {
      albumsInfo : [],
      albumsGenre: [],
      selected : '',
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

        getGenreAlbums(){
          axios.get('../controller.php?genre='+this.selected+'')
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