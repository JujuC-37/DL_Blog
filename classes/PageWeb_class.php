<?php
    require_once("DataBase_class.php");

    class PageWeb {
        // ---------------------- attributes -----------------------
        private $lang;
        private $pageStyle;
        private $jsScript;
        private $title;

        // -------------------- public methods ---------------------
        public function __construct($lang, $pageStyle, $jsScript, $title) {
            echo "<!DOCTYPE html>
            <html lang=$lang>";

            $this->displayHeadHtml($pageStyle, $jsScript, $title);
            echo "<body>";
            $this->displayHeader();
        }
        
        public function __destruct() {
            $this->displayFooter();
            echo "</body></html>";
        }
        
        public function displayAllArticle() {
            $myDB = DataBase::connectDB();
            $articlesList = $myDB->getAllArticles();
            
            foreach($articlesList as $article) {
                $this->displayArticle($article);
            }
        }

        private function displayArticle($article) {
            $title =        $article["title"];
            $nameAuthor =   $article["author"];
            $dateTime =     $article["dateCreation"];
            $dateUpdate =   $article["dateUpdate"];
            $content =      $article["content"];

            echo "<article>
                    <h1>$title</h1>
                    <div class='details'>
                        <p class='author'>$nameAuthor<br>
                        creation: $dateTime";

            // only if the article has been updated
            if($dateUpdate != null){
                echo "update: $dateUpdate";
            }

            echo        "</p>
                    </div>
                    <div>$content</div>
                </article>
            ";         
        }
        
        // -------------------- private methods --------------------
        private function displayHeadHtml($pageStyle, $jsScript, $title) {
            echo "
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            ";
            
            if($pageStyle !== null) {
                echo "<link rel='stylesheet' href='style.css'>";
            }
            if($jsScript !== null) {
                echo "<script type='text/javascript' src='$jsScript' async defer></script>";
            }

            echo "
                <title>$title</title>
            </head>
            ";
        }

        private function displayHeader() {
            echo "
            <header>
                <h1>My blog</h1>
            </header>";
        }

        private function displayFooter() {
            echo "
            <footer>
                <p>Blog created by Juliette-C during a php module in formation</p>
            </footer>
            ";
        }
        
    }

?>