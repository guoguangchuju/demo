<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="/demo/Public//jquery.js"></script>
    <script type="text/javascript">
        $(function (){
            $('#btn1').on('click',function (){
                $('#test1').text('我是改变你的！')
            });
        });
    </script>
</head>

<body>
<p id="test1">  /demo/index.php/Home  /jq.js。</p>
<p id="test2">这是另一个段落。</p>
<p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>
<button id="btn1">设置文本</button>
<button id="btn2">设置 HTML</button>
<button id="btn3">设置值</button>
</body>
</html>