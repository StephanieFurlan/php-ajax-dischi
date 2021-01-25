import Vue from 'vue';
import axios from 'axios';
var app = new Vue({
    el: "#app",
    data: {
        title: "hello",
        discs: []
    },
    mounted() {
        axios
        .get('discs_db.php')
        .then(response => (
            this.discs = response.data
        ))
  }
}) 