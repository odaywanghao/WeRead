<?php if (!defined('THINK_PATH')) exit();?><h1>注册</h1>
<FORM method="post" action="/weread/index.php/Home/User/addUsers">
用户名：<INPUT type="text" name="username"><br/>
密码：<INPUT type="text" name="password"><br/>
确认密码：<INPUT type="text" name="repassword"><br/>
邮箱：<INPUT type="text" name="email"><br/>
<INPUT type="submit" value="注册">
</FORM>


<h1>登录</h1>
<FORM method="post" action="/weread/index.php/Home/User/login">
<INPUT type="submit" value="登录">
</FORM>