<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>一整天科技 </title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/jquery.js"></script>
        <script src="/js/angular.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/main.js"></script>
    </head>
    <body>
        <header>
            <div class="company"> 一整天网络有限公司</div>
            <div class="user">
                <span>欢迎您：<span class="username"><?= $user ?></span><a href="javascript:chpasswd()">修改密码</a><a href="/backend/login/logout">退出</a></span>
            </div>
        </header>
        <div class="container">
            <div class="menu">
                <div class="menu">
                    <?php foreach ($menus as $menu) { if ($menu['show'] == 1) { ?>
                    <div class="item">
                        <div class="controller"><?= $menu['remark'] ?></div>
                        <ul class="action">
                            <?php foreach ($menu['child'] as $action) { if ($action['show'] == 1) { ?>
                            <li <?php if ($menu['name'] == $currentcontroller && $action['name'] == $currentaction) { ?> class='active' <?php } ?> ><a href="/backend/<?= $menu['name'] ?>/<?= $action['name'] ?>"><?= $action['remark'] ?></a></li>
                            <?php } ?><?php } ?>
                        </ul>
                    </div>
                    <?php } ?><?php } ?>
                </div>
            </div>
            <div class="content" ng-app="myapp" ng-init="pagenum=20">
               <img src="/img/in.gif"  class="shrink" />
                <div class="main">
                    <?= $this->getContent() ?>
                </div>
            </div>
        </div>
        <footer>
            Copyright © 2016 苏州哪划算网络有限公司出品.保留所有权利。
        </footer>
        <div class="chpass" >
            <form action="/backend/index/chpass" method="post" >
                <table>
                    <caption>修改密码</caption>
                    <tr>
                        <th>原密码</th>
                        <td><input class="biginput"  name="oldpass" type="password" required /></td>
                    </tr>
                    <tr>
                        <th>新密码</th>
                        <td> <input  class="biginput"  name="newpass" type="password" required >
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="bigbutton" value=" 确 定 "  />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
