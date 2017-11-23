<?php
    require_once("classes/PageWeb.class.php");

    $lang = "fr";
    $pageStyle = "style.css";
    $jsScript = null;
    $title = "Index";

    $indexPage = new PageWeb($lang, $pageStyle, $jsScript, $title);
    
    $indexPage->displayArticle("23/11/2017 15h40", "Nom auteur", null, "Premier article", null, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam porro quisquam nesciunt quas omnis quos suscipit facere aliquid fugiat. Animi sequi et dolores deleniti voluptatum. Magni tenetur quos doloribus rerum.");
    $indexPage->displayArticle("23/11/2017 15h40", "Nom auteur", null, "Premier article", null, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam porro quisquam nesciunt quas omnis quos suscipit facere aliquid fugiat. Animi sequi et dolores deleniti voluptatum. Magni tenetur quos doloribus rerum.");
    $indexPage->displayArticle("23/11/2017 15h40", "Nom auteur", null, "Premier article", null, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam porro quisquam nesciunt quas omnis quos suscipit facere aliquid fugiat. Animi sequi et dolores deleniti voluptatum. Magni tenetur quos doloribus rerum.");
    $indexPage->displayArticle("23/11/2017 15h40", "Nom auteur", null, "Premier article", null, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam porro quisquam nesciunt quas omnis quos suscipit facere aliquid fugiat. Animi sequi et dolores deleniti voluptatum. Magni tenetur quos doloribus rerum.");
    $indexPage->displayArticle("23/11/2017 15h40", "Nom auteur", null, "Premier article", null, "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam porro quisquam nesciunt quas omnis quos suscipit facere aliquid fugiat. Animi sequi et dolores deleniti voluptatum. Magni tenetur quos doloribus rerum.");
    
?>