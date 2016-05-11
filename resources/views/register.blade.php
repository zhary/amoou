<html>
    <head>
        <title>Home</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
        <link href="/css/master.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body>
        <div id="logo">
            <img src="/images/logo.png" />
        </div>
        <form action="/user/increase" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <ul class="login">
            <li>
            <div class="texttxtcs">
                    <span><u class="left"></u><u class="right"></u><strong><i>发送验证码</i><b class="rgritb"><input name='username' class="texttxt" placeholder="请输入手机号/ 邮箱" type="text"  /><b></strong></span>
            </div>
            </li>
            <li>
            <div class="texttxtcs">
                    <span><u class="left"></u><u class="right"></u><strong><input name='authcode' class="texttxt" placeholder="请输入手机验证码" type="text"  /></strong></span>
            </div>
            </li>
            <li>
            <div class="texttxtcs">
                    <span><u class="left"></u><u class="right"></u><strong><input name="pwd" class="texttxt" placeholder="输入密码"  type="text"  /></strong></span>
            </div>
            </li>
            <li>
            <div class="texttxtcs">
                    <span><u class="left"></u><u class="right"></u><strong><input name="pwdtwo" class="texttxt" placeholder="确认密码" type="text"  /></strong></span>
            </div>
            </li>
            <li>
            <div class="loginbtnrow">
                    <input class="loginbtn" type="submit" value="登陆" />
            </div>
            </li>
        </ul>
        </from>
    </body>
<html/>