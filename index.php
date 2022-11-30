<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Php Todo List Json</title>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">    
</head>

<body>

    <div id="app">
        <h2>To do List</h2>
        <ul>
            <li v-for="(todo, index) in todoList">{{todo.text}}</li>
        </ul>
    </div>

    <script src="./script/main.js"></script>
</body>

</html>