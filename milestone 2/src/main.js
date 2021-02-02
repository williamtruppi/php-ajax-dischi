let app = new Vue ({

  el: ".wrapper",

  data: {
    discList: [],
  },

  mounted() {
    axios.get("http://localhost/php-ajax-dischi/milestone%202/src/db.php")
        .then(response => {
         this.discList = response.data;
         console.log(this.discList);
      })
      .catch(function (error) {
        console.log(error);
      });
  }

}) 