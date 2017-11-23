<?php

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
        
        public function displayArticle($dateTime, $nameAuthor, $avatarAuthor, $title, $image, $content) {
            echo "<article>
                    <h1>$title</h1>
                    <div class='details'>
                        <div class='author'>
                            <img src='$avatarAuthor' alt='author avatar'>
                            <p>$nameAuthor</p>
                        </div>
                        <p>$dateTime</p>
                    </div>
                    <div>$content</div>
                </article>
            ";
        }

        // ------------------- protected methods -------------------
        
        // -------------------- private methods --------------------
        private function displayHeadHtml($pageStyle, $jsScript, $title) {
            echo "
            <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta http-equiv='X-UA-Compatible' content='ie=edge'>
            ";
            
            if($pageStyle !== null) {echo "<link rel='stylesheet' href='style.css'>";}
            if($jsScript !== null) {echo "<script type='text/javascript' src='$jsScript' async defer></script>";}

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