<?php
(isset($_COOKIE['myEnters']))?  setcookie('myEnters',++$_COOKIE['myEnters']): setcookie('myEnters',1);
