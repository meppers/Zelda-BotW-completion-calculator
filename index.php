<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="theme-color" content="#000000">
    <title>HATE SEEDS</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="/img/korokSeed.png" />

    <!--    google mobile sticky ad-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9435066537369577",
            enable_page_level_ads: true
        });

    </script>
</head>


<body>
    <!--for facebook buttons-->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>


    <div class="row content">
        <div class="large-12 columns">
            <h1>Breath of the Wild completion without seeds</h1>
        </div>
        <div class="large-12 show-for-small-only columns">
            <!--
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
             Hate seeds: below submit button 
            <ins class="adsbygoogle"
                 style="display:inline-block;width:320px;height:100px"
                 data-ad-client="ca-pub-9435066537369577"
                 data-ad-slot="9717010841"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
-->
            <!--        placeholder image-->
            <img src="http://lorempixel.com/output/abstract-q-c-320-50-8.jpg" alt="">
            <div class="disclamer">Advertisement</div>
            <br><br>

        </div>
        <br><br>
        <div class="medium-5 columns">
            <div class="callout">
                <form action="<?php $_SERVER[" PHP_SELF "]; ?>" method="POST">
                    <label>
                        This tool needs information that the game will not tell you until you beat the main story.
                        <br><br>
                        What is the <span class="hiRed">completion percentage</span> shown on your map?
                    <input type="number" name="userComp" placeholder="00.00" step=".01" min="0.00" max="100.00">
                </label>
                    <label>
                        How many <span class="hiRed">Korok seeds</span> do you have on the loading screen?
                    <input type="number" name="userSeeds" placeholder="000" min="0" max="900">
                </label>
                    <input type="submit" name="submit" class="hollow button" value="Submit">

                    <!--Help images-->
                    <label class="collapse link" for="_1">Need Help?</label>
                    <input id="_1" type="checkbox">
                    <div class="calloutText">
                        Number of seeds you have found: <br> <img src="/img/loadScreen.png" alt="korok seed counter location">
                        <br><br> Completion percentage: <br> <img src="/img/mapSmall.jpg" alt="completion percentage location"> <br><br> The completion percentage on your map is only shown after you <span class="hiRed">beat the main story</span>.
                    </div>
                </form>
            </div>
            <br><br><br>

            <!--
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
             Hate seeds: below submit button 
            <ins class="adsbygoogle"
                 style="display:inline-block;width:320px;height:100px"
                 data-ad-client="ca-pub-9435066537369577"
                 data-ad-slot="9717010841"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
-->
            <!--placeholder image-->
            <img src="http://lorempixel.com/output/abstract-q-c-320-100-5.jpg" alt="">
            <div class="disclamer">Advertisement</div>

            <!--php calculator-->
            <?php
            $allSeeds = .08;
            $neededSeeds = 0.163265306122449;
            $rest = 28;

            
            if( $_POST["userComp"] || $_POST["userSeeds"]){
                $noSeeds = ($_POST['userComp'] - ($_POST['userSeeds'] * $allSeeds)) + 72;
                $usefulSeeds = ($_POST['userComp'] - ($_POST['userSeeds'] * $neededSeeds)) + 72; 
                
                echo "
                <br> Completion minus seeds: <span class='answer hiRed'>$noSeeds%</span>
                <br> Completion with only 441 seeds: <span class='answer hiRed'>$usefulSeeds%</span><br>
                <div class='disclamer'>You need 441 seeds to max out your inventory, the rest do virtually nothing.</div>
                ";
              
            } else {
                //do nothing and hide results output
                echo "<br>"; //the social media buttons can't be too close to an ad.
            }
            ?>


                <!--
                placeholder output
                <br> Completion minus seeds: <span class="answer">88.23%</span>
                <br> Completion with only 441 seeds: <span class="answer">72.46%</span><br>
                <div class="disclamer">You need 441 seeds to max out your inventory, the rest do virtually nothing.</div>
-->


                <br><br>
                <!--share buttons-->
                <div class="row">
                    <div class="large-12 column">
                        <script type="text/javascript" src="//www.redditstatic.com/button/button1.js"></script>
                        <br>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <br>
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data size="small" data-show-faces="false" data-share="true"></div>
                    </div>
                </div>
        </div>


        <div class="medium-3 columns show-for-medium rightAd">
            <br>
            <!--
            
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
             Hate seeds: right column 
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:600px"
                 data-ad-client="ca-pub-9435066537369577"
                 data-ad-slot="9856611645"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
-->
            <!--placeholder image-->
            <img src="http://lorempixel.com/output/abstract-h-c-300-600-6.jpg" alt="">
            <div class="disclamer">Advertisement</div>
        </div>
    </div>
    <div class="row footer">
        <div class="large-12 columns callout calloutText txtCenter">if this thing isnt working, send your complaints to <a href="mailto:emwarren008@gmail.com" class="link">emwarren008@gmail.com</a></div>
    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
