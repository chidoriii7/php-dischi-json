const { createApp } = Vue

createApp({
  data() {
    return {
      //url api (locale)

        urlDischi: 'http://localhost/PHP/php-dischi-json/server.php',
        listaDischi: []
    }
  },

  methods: {
    apiCall() {
      console.log('')

      axios.get(this.urlDischi).then((response) => {
        
        this.listaDischi = response.data;

      });
    },
  },

  created () { 
  this.apiCall(); 

  console.log('sono su mounted')
  }
  
}).mount('#app')