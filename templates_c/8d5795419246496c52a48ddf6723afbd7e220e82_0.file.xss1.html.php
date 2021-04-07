<?php
/* Smarty version 3.1.33, created on 2019-11-26 02:34:26
  from 'D:\phpstudy\PHPTutorial\WWW\public\xss1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddc8f32e81714_30035818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d5795419246496c52a48ddf6723afbd7e220e82' => 
    array (
      0 => 'D:\\phpstudy\\PHPTutorial\\WWW\\public\\xss1.html',
      1 => 1574735665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddc8f32e81714_30035818 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['UI_CSS']->value;?>
">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['UI_JQ']->value;?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['UI_JS']->value;?>
"><?php echo '</script'; ?>
>
    <style>
        .header{
            font-size: 1em;
            font-weight: 700;
        }
        #side{
            display: flex;
            height:calc(100vh);
            overflow: auto;
        }
        .article{
            width: 100%;
            height: 100%;
        }
        #buttom{
            margin: 10px 0;
        }

        .articleP{
            padding: 3em 3em 1em 3em!important;
        }
    </style>
</head>
<body>
<div id="side"  class="ui vertical inverted sticky menu fixed">
    <a href="xxxx.html" class="item" style="text-align: center;font-size:25px;">
        <b>0xNull</b>
    </a>
    <a class="item" target="_blank" href="http://www.0xNull.org/">
        <b style="color:bisque">
            0xNull 论坛
        </b>
    </a>
    <div class="item">
        <div class="header">SQL注入漏洞</div>
        <div class="menu">
            <a href="/index.php" class="item">
                常规SQL注入
            </a>
            <a href="/index.php/Home/Index/SQL_tow" class="item">
                布尔盲注SQL注入
            </a>
            <a href="#" class="item">
                时间盲注SQL注入
            </a>
            <a href="#" class="item">
                limit注入
            </a>
            <a href="#" class="item">
                order by注入
            </a>
            <a href="#" class="item">
                union 写入webshell
            </a>
            <a href="#" class="item">
                order by写webshell
            </a>
            <a href="#" class="item">
                limit 写shell
            </a>
            <a href="#" class="item">
                union 读取文件
            </a>
            <a href="#" class="item">
                盲注 读取文件
            </a>
        </div>
    </div> <!-- SQL注入结束 -->
    <div class="item">
        <div class="header">XSS漏洞</div>
        <div class="menu">
            <a href="" class="item">
                反射型XSS
            </a>
            <a href="" class="item">
                输出在script中
            </a>
            <a href="" class="item">
                输出在script中_2
            </a>
            <a href="" class="item">
                输出在html属性中
            </a>
            <a href="" class="item">
                换行符复仇记
            </a>
            <a href="" class="item">
                完蛋,JavaScript被过滤了
            </a>
            <a href="" class="item">
                震惊!等号究竟是怎么回事
            </a>
            <a href="" class="item">
                可怕! onerror输出出了故障
            </a>
            <a href="" class="item">
                Dom型XSS 显式输出
            </a>
            <a href="" class="item">
                Dom型XSS 隐式输出
            </a>
            <a href="" class="item">
                Dom型XSS 善变的iframe
            </a>
            <a href="" class="item">
                Dom型XSS 邂逅eval
            </a>
            <a href="" class="item">
                Dom型XSS 路径con
            </a>

        </div>
    </div> <!-- Xss结束 -->
    <div class="item">
        <div class="header">文件上传漏洞</div>
        <div class="menu">
            <a href="#" class="item">
                任意文件上传漏洞
            </a>
            <a href="#" class="item">
                基于黑名单的文件上传
            </a>
            <a href="#" class="item">
                基于白名单的文件上传
            </a>
            <a href="#" class="item">
                基于type检测的文件上传
            </a>
            <a href="#" class="item">
                基于内容验证的文件上传
            </a>
        </div>
    </div> <!-- 文件上传结束 -->
    <div class="item">
        <div class="header">XXE漏洞</div>
        <div class="menu">
            <a href="#" class="item">
                回显型XXE
            </a>
            <a href="#" class="item">
                盲型XXE
            </a>
        </div>
    </div><!-- XXE结束 -->
    <div class="item">
        <div class="header">SSRF漏洞</div>
        <div class="menu">
            <a href="#" class="item">
                一马平川
            </a>
            <a href="#" class="item">
                过滤了Ip
            </a>
            <a href="#" class="item">
                匹配127.0.0.1
            </a>
        </div>
    </div><!-- SSRF结束 -->
</div>
<div class="article">
    <div class="ui masthead vertical segment articleP">
        <h1 class="ui header">
            <?php echo $_smarty_tpl->tpl_vars['expTitle']->value;?>

            <div class="sub header">
                <?php echo $_smarty_tpl->tpl_vars['alt']->value;?>

            </div>
        </h1>
        <div id="buttom" class="ui download primary button">
            查看代码
        </div>
    </div>

    <div class="ui hidden divider"></div>

    <div style="padding: 1px 3em">
        <h3 class="ui header">
            <?php echo $_smarty_tpl->tpl_vars['alt_1']->value;?>

        </h3>
        <div class="ui raised segment" style="width: 100% !important;">
            <p><code id='code'></code><?php echo '<script'; ?>
>var hash = location.hash;var a=document.getElementById('code').innerHTML="PHP代码如下:"+hash<?php echo '</script'; ?>
></p>
        </div>

        <!--<div class="ui tertiary inverted red segment">
            <p><?php echo $_smarty_tpl->tpl_vars['sql']->value;?>
</p>
        </div> -->
    </div>

</div>
<!-- 控制article大小 -->
<?php echo '<script'; ?>
>
    var article = document.getElementsByClassName("article")[0];
    var menu = document.getElementsByClassName("menu")[0];
    width = menu.offsetWidth;
    article.style.marginLeft = width + 'px';
    Awidth = article.offsetWidth - width;
    article.style.width = Awidth + 'px';
    console.log("官方论坛:http://www.0xNull.org/");
    console.log("作者blog:http://www.f4ckweb.top/");
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
