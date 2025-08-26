<?php

if (!defined('__TYPECHO_ROOT_DIR__'))
    exit;

?>
<!DOCTYPE HTML>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://img.314926.xyz/images/2025/08/13/no-background-kemiaofxjun.webp">
    <link rel="icon" type="image/png" sizes="32x32" href="https://img.314926.xyz/images/2025/08/13/no-background-kemiaofxjun.webp">
    <link rel="icon" type="image/png" sizes="16x16" href="https://img.314926.xyz/images/2025/08/13/no-background-kemiaofxjun.webp">
    <link rel="manifest" href="/usr/themes/icefox/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/usr/themes/icefox/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title><?php echo $this->options->title ?></title>
    <title>
        <?php echo $this->options->title ?>
    </title>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet"
        href="<?php $this->options->themeUrl('assets/css/style.css'); ?>?v=<?php echo __THEME_VERSION__; ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/viewer.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('uno.css'); ?>?v=<?php echo __THEME_VERSION__; ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/fancybox.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/plyr.css'); ?>">
    <style>
        <?php echo $this->options->css; ?>
    </style>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/jqueryui.min.js'); ?>"></script>
    <script type="text/javascript"
        src="<?php $this->options->themeUrl('assets/js/jquery.ui.touch.punch.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/axios.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/viewer.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/scrollload.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/fancybox.umd.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/lazyload.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/anime.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/hls.min.js'); ?>"></script>
    <script type="text/javascript"
        src="<?php $this->options->themeUrl('assets/js/intersection-observer.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/plyr.js'); ?>"></script>
    <!--<script type="text/javascript" src="<?php $this->options->themeUrl('assets/js/Sortable.min.js'); ?>"></script>-->
    <script type="text/javascript"
        src="<?php $this->options->themeUrl('assets/js/icefox.js'); ?>?v=<?php echo __THEME_VERSION__; ?>"></script>
    <script type="text/javascript"
        src="<?php $this->options->themeUrl('assets/js/edit.js'); ?>?v=<?php echo __THEME_VERSION__; ?>"></script>
    <script type="text/javascript">
        <?php echo $this->options->script; ?>
    </script> <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body>
    <div class="bg-[#f0f0f0] dark:bg-[#262626]">
        <div style="min-height:100%">
