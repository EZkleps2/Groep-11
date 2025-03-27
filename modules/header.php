<header>
    <section class="headerHolder">
    <a href="index.php"><img class="logo" src="images/logo.png" alt="Logo Umani Sushi"></a>
        <nav class="navagationHolder">
            <section class="navtext">
                <?php
                // maakt site waar hij op zit bolded/strong
                    function navagationBolder($page, $text){
                        // basenamt pakt de file name+ extention dus bvb "menu.php"
                        $pageName = basename($_SERVER['SCRIPT_NAME']);
                        // als page het zelfde is als pagename dan is het "<b>{$text}</b>" en als het niet zo is is het "$text"
                        $boldedText = ($page == $pageName) ? "<b>{$text}</b>" : $text;
                        // stored de tekst die hij moet printen (verschilt per pagina)
                        return "<a href='${page}' class='navagation'>${boldedText}</a>";
                    }
                    // echo'd het met of zonder bold
                    echo navagationBolder("menu.php", "Menu");
                    echo navagationBolder("reseveren.php", "Reseveren");
                    echo navagationBolder("locatie.php", "Openingstijden & Locatie");
                    echo navagationBolder("vacatures.php", "Vacatures");

                
                ?> 
            </section>
        <img onclick="hamburgerMenu()" id="hamburger" src="images/hamburger.png">
            
        </nav>
        
    </section>
    <section id="navagationH">
        <?php
            echo navagationBolder("menu.php", "Menu");
            echo navagationBolder("reseveren.php", "Reseveren");
            echo navagationBolder("locatie.php", "Openingstijden & Locatie");
            echo navagationBolder("vacatures.php", "Vacatures");
        ?> 
    </section>
</header> 