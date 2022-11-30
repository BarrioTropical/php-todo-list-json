const { createApp } = Vue;

createApp({
    data(){
        return{
            //hola: "hola",
            todoList: [],
            apiUrl: './server.php',
        }
    },
    methods: {
        getTodo(){
        axios.get(this.apiUrl).then((response) => {
            //console.log(response.data);
            this.todoList = response.data;
        });
    },
},
    mounted() {
        this.getTodo();
    },
}).mount('#app');