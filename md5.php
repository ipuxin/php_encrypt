<?php
/**
 * 使用场景:
 * 传参时:如果参数含有关键字&
 */

/**
 * 如果用户名为:dabao&king
 * Array ( [username] => dabao [king] => [age] => 18 )
 */
if(isset($_GET)){
    print_r($_GET);
}
echo '<hr>';
$str = 'http://localhost/git/php_encrypt/md5.php?username=dabao&king&age=18';
echo "<a href='" . $str . "'>特殊用户名</a><br>";
