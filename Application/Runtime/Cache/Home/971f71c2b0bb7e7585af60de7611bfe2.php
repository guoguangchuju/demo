<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="http://pv.sohu.com/cityjson?ie=utf-8"></script><script type="text/javascript"></script>
    </head>
    <body>
    <form id="form" action="<?php echo U();?>" method="post">
        <span>请输入IP地址： </span>
        <input type="text" name="ip"value="<?php echo ($a); ?>"/>
        <button type="submit" id="submit">查询</button>
    </form>
    <p>
        ip所在区域为: <?php echo ($ip); ?>

    </p>
    </body>
</html>