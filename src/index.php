<?php

require_once './Captcha.php';

$captcha = new Captcha;

echo $captcha->write();