<?php
//创建小组
defined('IN_TS') or die('Access Denied.');

//用户是否登录
$userid = aac('user')->isLogin();

$arrOne = $db->fetch_all_assoc("select * from ".dbprefix."group_cates where catereferid='0'");

$title = '创建小组';

include template("create");