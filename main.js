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
      axios.get(this.urlDischi).then((response) => {

        this.listaDischi = response.data;
      });
    }
  }
  
}).mount('#app')