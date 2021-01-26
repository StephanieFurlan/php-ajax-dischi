import Vue from 'vue';
import axios from 'axios';
var app = new Vue({
    el: "#app",
    data: {
        title: "hello",
        discs: [],
        genres: [],
        genre: ''
    },
    methods: {
        filter() {
            axios.get("server.php", {
                params: {
                    genre: this.genre
                }
            }).then(response => {
                this.discs = response.data;
            })
        }
    },
    mounted() {
        axios
        .get('server.php')
        .then(response => {
            this.discs = response.data;
            this.discs.forEach(disc => {
                if (!this.genres.includes(disc.genre)) {
                    this.genres.push(disc.genre);
                }
            });
        })
        console.log("hey");
    }
}) 