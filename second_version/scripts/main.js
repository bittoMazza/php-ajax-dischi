const app = new Vue({
    el: '#app',
    data: {
      albumsInfo : [],
      albumsGenre: [],
    },
    methods :{
        getCardInfo() {
            axios.get('http://localhost/php-ajax-dischi/controller.php')
              .then( (result) => {   
                    this.albumsInfo = result.data;
                    this.createGenreArray(this.albumsInfo);
                    console.log(this.albumsGenre)
                  })                   
        },
        createGenreArray(albumArray){
          for(let i = 0; i < albumArray.length ; i++){
              if(!this.albumsGenre.includes(albumArray[i].genre)){
                  this.albumsGenre.push(albumArray[i].genre);
              }
          }
      },
     },

     created(){
      this.getCardInfo();
     }

  })