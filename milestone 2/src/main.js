let app = new Vue ({

  el: ".wrapper",

  data: {
    discList: [],
    selectedGenre: "",
  },

  methods: {

    chooseGenre(){
      this.discList = [];
      axios.get("./src/db.php")
        .then(response => {
          let tempArray = response.data;
          console.log(this.selectedGenre);
          tempArray.forEach(element => {
            if(this.selectedGenre !== "All"){
              if (element.genre === this.selectedGenre){
                this.discList.push(element);
              } 
            } else {
              this.discList = tempArray;
            }
          });
          console.log(this.discList);
        })
        .catch(function (error) {
        console.log(error);
        });
    }

  },

  created() {
    
    axios.get("./src/db.php")
        .then(response => {
          this.discList = response.data;
          console.log(this.discList);

          this.discList.forEach(element => {
            Vue.set(element, "visible", true);
          });

        })
        .catch(function (error) {
        console.log(error);
        });

  }


}) 