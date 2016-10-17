<?php
/**
 * 使用场景:
 * 传参时:如果参数含有关键字&
 */

/**
 * 如果用户名为:dabao&king
 * Array ( [user_name] => dabao& king [age] => 18 )
 */
if(isset($_GET)){
    print_r($_GET);
}
echo '<hr>';
$strName = urlencode('dabao& king');
$str = 'http://localhost/git/php_encrypt/md5.php?user name='.$strName.'&age=18';
echo "<a href='" . $str . "'>特殊用户名</a><br>";
//http://localhost/git/php_encrypt/md5.php?user%20name=dabao%26%20king&age=18
//http://localhost/git/php_encrypt/md5.php?user%20name=dabao%26+king&age=18