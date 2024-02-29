const { createApp } = Vue
 
  createApp({
    data() {
      return {
        apiUrl: 'server.php',
        dischi: []

      }
    },
    methods: {
        getDischi(){
          axios.get( this.apiUrl )
          .then( (response) => {
            console.log(response.data)
            this.dischi = response.data
          })
        }
    }
  }).mount('#app')