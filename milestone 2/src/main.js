let app = new Vue ({

  el: ".wrapper",

  data: {
    discList: [],
    selectedGenre: "",
  },

  methods: {

    chooseGenre(){
      
      axios.get("./src/db.php")
        .then(response => {
          console.log("ciao");
          console.log(response.data.genre);
          this.discList = response.data;
        })
        .catch(function (error) {
        console.log(error);
        });
    }

  },

  mounted() {
    
    axios.get("./src/db.php")
        .then(response => {
          this.discList = response.data;
        })
        .catch(function (error) {
        console.log(error);
        });
  }

}) 