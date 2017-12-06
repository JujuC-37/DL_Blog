<?php
    require_once("classes/PageWeb_class.php");

    $lang = "fr";
    $pageStyle = "style.css";
    $jsScript = null;
    $title = "Index";

    $indexPage = new PageWeb($lang, $pageStyle, $jsScript, $title);
    $indexPage->displayAllArticle();

?>