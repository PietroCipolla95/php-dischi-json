const { createApp } = Vue

createApp({
    data() {
        return {
            disks: '',
        }

    },

    mounted() {

        axios.request({
            url: 'server.php',
            methods: 'GET'
        })

            .then(response => {
                console.log(response.data);
                this.disks = response.data;
            })

    },

}).mount('#app')