var app = new Vue({
  el: '#app',
  data: {
    arrayDischi: [],
    generi: ['All'],
    genereSelezionato: 'All'
  },
  mounted() {
    axios
      .get("/../77-01.03.2021/php-ajax-dischi/api-album.php")
      .then((result) => {
        this.arrayDischi = result.data;

        this.arrayDischi.forEach((item) => {
          if(!this.generi.includes(item.genere)) {
            this.generi.push(item.genere);
          }
        });
    });
  }
});
