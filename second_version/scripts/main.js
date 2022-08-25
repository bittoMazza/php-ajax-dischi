const app = new Vue({
    el: '#app',
    data: {
      albumsInfo : [],
    },
    methods :{
        getCardInfo() {
            axios.get('http://localhost/php-ajax-dischi/second_version/controller.php')
              .then( (result) => {   
                    this.albumsInfo = result;
                  })                   
        },
     },

     created(){
      this.getCardInfo();
     }

  })