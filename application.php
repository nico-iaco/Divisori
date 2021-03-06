﻿<!DOCTYPE html>
<html lang="it">

<head>
    <title>Nicola Iacovelli</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="description" content="Sito sui progetti di Nicola Iacovelli">
    <meta name="author" content="Nicola Iacovelli">
    <style type="text/css">
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-image: url("/img/blue-grey-pentagonal-background.jpg");
            background-size: contain;
        }

        main {
            flex: 1 0 auto;
        }

        #contenuto {
            background-color: rgba(0,0,0,0.3);
            color: white;
            margin-top: 20px;
            padding-left: 5px;
            padding-right: 5px;
            padding-bottom: 5px;
            border-radius: 10px 10px 10px 10px;
        }

        .footer-copyright {
            text-align: center;
        }

        #titolo {
            text-align: center;
        }

        .addthis_inline_follow_toolbox {
            color: white;
        }
    </style>
    <script>
    !function(e){"use strict"
        var n = function (n, t, o) {
            function i(e) {
                return f.body ? e() : void setTimeout(function () { i(e) });
            }
            var d, r, a, l, f = e.document, s = f.createElement("link"), u = o || "all"
            return t ? d = t : (r = (f.body || f.getElementsByTagName("head")[0]).childNodes, d = r[r.length - 1]), a = f.styleSheets, s.rel = "stylesheet", s.href = n, s.media = "only x", i(function () {
                d.parentNode.insertBefore(s, t ? d : d.nextSibling)
            }), l = function (e) {
                for (var n = s.href, t = a.length; t--;) if (a[t].href === n) return e()
                setTimeout(function () {
                    l(e)
                })
            }, s.addEventListener && s.addEventListener("load", function () { this.media = u }), s.onloadcssdefined = l, l(function () { s.media !== u && (s.media = u) }), s
        }
    "undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this)
    </script>
    <script>
        loadCSS("/css/materialize.min.css");
        loadCSS("http://fonts.googleapis.com/icon?family=Material+Icons");
    </script>
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header class="page-header">
        <nav>
            <div class="nav-wrapper grey darken-2">
                <a href="#" class="brand-logo">Nicola Iacovelli</a>
            </div>
        </nav>
    </header>
    <main class="page-main">
        <div class="container" id="contenuto">
            <h2 id="titolo">Divisori</h2>
            <hr />
            <?php
            /* 
            * Copyright © 2017 Nicola Iacovelli
            * Tutti i diritti sono riservati
            */
            if(isset($_POST['numero'])){
                $numero=(int)$_POST['numero'];
                if($numero!=0){
                    if($numero>0){
                        echo '<p>Ecco i divisori di:'.$numero.'</p>';
                        echo '<ul>';
                        for($i=1;$i<=$numero;$i++){
                            if($numero%$i==0){
                                echo '<li>Divisore:'.$i.'</li>';
                            }
                        }
                        echo '</ul>';
                    }
                    else {
                        echo 'Cambia numero!';
                    }
                }
                else {
                    echo 'Ripeti i numeri!!';
                }
            }
            else {
                echo 'Il nulla non è un numero';
            }
            ?>
        </div>
    </main>
    <footer class="page-footer grey darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Nicola Iacovelli</h5>
                </div>
                <div class="col l4 offset-l2 s12">
                    <div class="addthis_inline_follow_toolbox"></div>        
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-3">
            © 2017 Copyright Nicola Iacovelli
        </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/js/materialize.min.js"></script>
    <script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-587143d93f91213a"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".button-collapse").sideNav();
        });
    </script>
</body>

</html>