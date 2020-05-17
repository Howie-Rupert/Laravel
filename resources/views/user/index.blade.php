<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>name:{{  $data['name']  }} password: {{  $data['password']  }}</h3>
    <h3>{!!  $html  !!}</h3>
    <h3>{{  date('Y-m-d')  }}</h3>
    <div id="app">
        @{{  name  }}
    </div>
<script src="/js/vue.js"></script>
<script>
    new Vue({
        el:'#app',
        data:{
            name:'hello world'
        }
    })
</script>
</body>
</html>