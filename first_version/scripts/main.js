const app = new Vue({
    el: '#app',
    data: {
      albumsInfo : [],
    },
    methods :{
        getCardInfo() {
            axios.get('https://flynn.boolean.careers/exercises/api/array/music')
              .then( (result) => {   
               
                  })                   
        },
     }
  })