<?php if (!defined('THINK_PATH')) exit();?><html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<form id="form" method="post">
    <span>请输入IP地址： </span>
    <input type="text" name="ip" />
    <button type="submit" id="submit">查询</button>
</form>
<p>
    ip所在区域为: <?php echo ($ipdata); ?>

</p>
</body>
<<script type="text/javascript">
    $(function(){
        $('#submit').click(function(){
            $('#form').submit()
        })
    })
</script>
</html>