const { createApp } = Vue;

createApp({
    data() {
        return {
            
            disks: null,

        }
    },
    mounted() {
        axios
            .get("server.php")
            .then((resp) => {
                console.log(response);
                this.disks = response.data
                console.log(response.data);
            });
    }

}).mount("#app");