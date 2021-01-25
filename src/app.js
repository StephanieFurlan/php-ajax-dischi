import Vue from 'vue';
import axios from 'axios';
var app = new Vue({
    el: "#app",
    data: {
        title: "hello",
        discs: [],
        genres: []
    },
    mounted() {
        axios
        .get('discs_db.php')
        .then(response => {
            this.discs = response.data;
            this.discs.forEach(disc => {
                if (!this.genres.includes(disc.genre)) {
                    this.genres.push(disc.genre);
                }
            });
        }
            
            
        )
  }
}) 