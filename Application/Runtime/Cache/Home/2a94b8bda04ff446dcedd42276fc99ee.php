<?php if (!defined('THINK_PATH')) exit();?><html>
<head>

</head>
<body>
<p>
    我是第<?php echo ($data["0"]["id"]); ?>个，My name is <?php echo ($data["0"]["name"]); ?>！
</p>
<p><a href="<?php echo U('index/add');?>">增加</a></p>
</body>

</html>