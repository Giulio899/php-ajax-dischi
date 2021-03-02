var app = new Vue({
  el: '#app',
  data: {
    arrayDischi: []
  },
  mounted() {
    axios
      .get("http://localhost/77-01.03.2021/php-ajax-dischi/api-album.php")
        .then((result) => {
          this.arrayDischi = result.data;
          // console.log(this.arrayDischi);
      });
  }
});
