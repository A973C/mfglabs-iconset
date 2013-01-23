<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MFG Labs icon sets</title>
        <meta name="description" content="An icon webfont you can easely embed anywhere on your website and web application">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">


        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mfglabs_iconset.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Content -->
<header>
  <a href="http://mfglabs.com"><i class="icon-mfg_icon icon2x"></i></a>
</header>


<section class="slider">
  <div class="iconslider">
  <img src="img/slider_img1.jpg" alt="web font MFG Labs iconset" />
  </div>
</section>          

<section class="first_container">
      <h1>Why?</h1>
      <h2>because we love icons</h2>
      <p>We design à friendly iconset for the need of our inside project and client production. 
        It designed so it can be easely embedable on a website or application using a webfont and a bit of css. 
        So we decided to provide it to everyone. Our creation flow was inspired by the excelent work of Dave Gandy <a href="http://fortawesome.github.com/Font-Awesome/">font awesome project</a>.</p>
</section>

<div class="buttons">
      <a class="buttonbig" href=""><i class="icon-download"></i>Download project</a>
      <a class="buttonsmall" href=""><i class="icon-vector"></i>Download .svg file</a>
      <a class="buttonsmall" href=""><i class="icon-git"></i>See project on github</a>
</div>

<section id="" class="col-pattern">
  <div class="col-group">
    <div>
      <h1>Retina ready</h1>
      <h2>Fully scalable icons</h2>
      <p>Font are made with vector, so our it's fully scalable and will ever have a nice render on retina screen or mobile display.</p>
      <p class='picon'><i class="icon-vector"></i></p>
    </div>
    <div class="center-col">
      <h1>Logical assignement to unicode</h1>
      <h2>Semantic as possible</h2>
      <p>We avoid conflict with actual letter by using private are unicode. We also bind icon with existing unicode that represent the same glyphs allowing fallback in case of loading typography problem.</p>
      <img src="img/code_screen.png"></img>
    </div>
    <div>
      <h1>Constantly updated</h1>
      <h2>Bringing more icons everyday</h2>
      <p>Every project bring new icon, so we will update the font directory for every new icon we design.</p>
      <p class='picon'><i class="icon-clock"></i></p>
    </div>
  </div>
</section>

<section id="" class="second_container">
      <div class="floatspecial">
        <h1>MFG Labs</h1>
        <h2> Iconset</h2>
      </div>
      <p>Below are the classes to use for triggering the icons as well as their UTF codes. We use sematic mainly the Private Use Unicode (PUA) range to avoid conflicts with actual letters.</p>
       
</section>

<!--Pattern HTML-->
  <section id="listpattern" class="listpattern">
  	
  	<ul class="list img-list">
  	<?php
  	$json = json_decode(file_get_contents( dirname(__FILE__) . '/font.json'));
  	$nb = count($json->icons);
  	$html = '';
  	for ($i = 0; $i < $nb; $i++) {
  		$html .= '<li><div class="li-icon"><i class="'.$json->icons[$i].' icon2x"></i></div>';
  		$html .= '<div class="li-text"><p class="li-sub">'.$json->icons[$i].'</p></div></li>';
  	}
  	echo $html;
  	?>
  	</ul>

  </section>



<section class="thirdcontainer">

  <div>
  	<h1>How does it work?</h1>
    <h2>Easy as pie</h2>
      <p>Start by downloading the project on this <a href="">url</a>.</p>
      <p>1. Copy the font directory into your project</br>
2. Copy the <a href="">mfglabs_iconset.css</a> style sheet into your project.</br>
3. Copy the link of the stylesheet into you header</p>

        <pre><code>
&lt;link rel="stylesheet" href="css/mfglabs_iconset.css"&gt;
        </code></pre>

<p>4. Drop the markup &lt;i class="icon-name"&gt;&lt;/i&gt; anywhere</p>

        <pre><code>
&lt;i class="icon-paperplane"&gt;&lt;/i&gt;
        </code></pre>
  </div>





  <div>
    <h1>Customisation</h1>
    <h2>Size subclass</h2>
       
      <p>Create bevel and emboss is easy by using custom sub class</p>
        
      <div class="sizeexemple">
        <i class="icon-cloud" aria-hidden="true"></i>
        <i class="icon-cloud icon2x" aria-hidden="true"></i>
        <i class="icon-cloud icon3x" aria-hidden="true"></i>
      </div>

      <p>1. add the subclass icon2x oir icon3x</p>

        <pre><code>
&lt;<i></i> class="icon-cloud icon3x" aria-hidden="true"&gt;&lt;/i&gt;
        </code></pre>

      <p>2. customise your css directly in mfglabs_iconset.css</p>

        <pre><code>
.icon2x { font-size: 2em; }

.icon3x { font-size: 3em; }
        </code></pre>
  </div>


  <div>
    <h1>Customisation</h1>
    <h2>Style subclass</h2>
       
       <p>Create bevel and emboss is easy by using custom sub class</p>
        
      <div class="styleexemple">
        <i class="icon-globe gradient icon3x" aria-hidden="true"></i>
        <i class="icon-time  gradient icon3x" aria-hidden="true"></i>
        <i class="icon-cloud  gradient icon3x" aria-hidden="true"></i>
        <i class="icon-stop_watch  gradient icon3x" aria-hidden="true"></i>
        <i class="icon-placepin  gradient icon3x" aria-hidden="true"></i>
        <i class="icon-data_science  gradient icon3x" aria-hidden="true"></i>
        <i class="icon-heart  gradient icon3x" aria-hidden="true"></i>
      </div>

      <p>1. add a sub class, for example : class="gradient"</p>

        <pre><code>
&lt;i class="icon-globe gradient icon3x" aria-hidden="true"&gt;&lt;/i&gt;
        </code></pre>

      <p>2. customise your css directly in mfglabs_iconset.css</p>

        <pre><code>
.style1 {
  color: #999;
  text-shadow: 1px 1px 1px rgba(27, 27, 27, 0.19);
  
  background-image: -webkit-gradient(
  linear,
  left top, left bottom,
  from(rgba( 182, 182, 182, 1)),
  to(rgba(60, 60, 60, 1))
  );
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
	
  transition: all 0.1s ease-in-out;
  -webkit-transition: all 0.1s ease-in-out;                
}
        </code></pre>

        <p>3. add hover</p>

        <pre><code>
.gradient:hover, .gradient .current {
  color: #eee;
  text-shadow: 0px 0px 3px rgba(255, 255, 255, 0.25);

  background-image: -webkit-gradient(
  linear,
  left top, left bottom,
  from(rgba( 255, 255, 255, 1)),
  to(rgba(187, 187, 187, 1))
  );
}
        </code></pre>

  </div>
  
</section>



<section class="credit">
      <h1>Licence</h1>
      <h2>Open source</h2>
      <p>
        <strong>Creative common attribution licences</strong></br>
        Licensees may copy, distribute, display and perform the work and make derivative works based on it only if they give the author or licensor the credits in the manner specified by these.
        </br>
        <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">MFG Labs Iconset</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.mfglabs.com" property="cc:attributionName" rel="cc:attributionURL">MFG Labs</a> est mis à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.fr">licence Creative Commons Attribution 3.0 non transposé</a>.
        <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.fr"><img alt="Licence Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/80x15.png" /></a>
      </p>
       <p>
        <strong>MIT licence</strong></br>
        Permission is hereby granted, free of charge, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
        The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
        <a href="http://fr.wikipedia.org/wiki/MIT_Licence">http://fr.wikipedia.org/wiki/MIT_Licence</a>
      </p>      
</section>

    <div class="buttons">
      <a href="#" class="buttonbig"><i class="icon-download"></i>Download project</a>
    </div>

<section id="" class="credit last">
      <div class="avatar"><img src="img/avatar_mc.jpg"/></div>
      <h1>Martin Charpentier</h1>
      <h2>Designer at MFG Labs</h2>
      <p class="italic">«It was so much fun to create all those icons and the little code to go with. I hope you will enjoy this icon webfont and find for it many applicaton.»</p>

      <div id="paragraph">
      <h1>Useful links</h1>
      <h2>everythings that help us</h2>
      <ul>
        <li><i class="icon-arrow_right"></i><a href="https://github.com/blog/1135-the-making-of-octicons">The Making of Octicons</a></li>
        <li><i class="icon-arrow_right"></i><a href="https://github.com/blog/1106-say-hello-to-octicons">Say Hello to Octicons</a></li>        
        <li><i class="icon-arrow_right"></i><a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a></li>
        <li><i class="icon-arrow_right"></i><a href="http://www.unicode.org/consortium/consort.html">Unicode Consortium</a></li>
        <li><i class="icon-arrow_right"></i><a href="http://www.codestyle.org/css/at-font-face/StandardUnicodeIconsWebFonts.shtml">A standard for Unicode icons in Web fonts</a></li>      
      </ul>
      </div> 
</section>


<footer>
    <div class="center txt-center">
    
      <h1>Thank you</h1>
      <h2>We hope you have enjoy this project</h2>

      <div class="feedback">
        <p><strong>Send us your feedback</strong></br>Our work isn’t perfect so far, let us know if you want to contribute by sending us some feedback. Contact us via twitter.</p>
        <a href="https://twitter.com/mfg_labs" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @mfg_labs</a>
      </div>
      
      </div>

      <div class="legal">
      <div><img src="img/mfg_logo_r.jpg"></div>
      <p class="catch">Maintening a day to day interaction between
      mathematical research & real world applications<p>

      <strong>Copyright © 2013 MFG Labs</strong>

      <span>
        <a href="https://twitter.com/mfg_labs"><i class="icon-twitter_circle icon2x"></i></a>
        <a href="https://www.facebook.com/MFGLabs"><i class="icon-facebook_cricle icon2x"></i></a>
        <a href=""><i class="icon-git_circle icon2x"></i></a>
        <a href="http://dribbble.com/mfg_labs"><i class="icon-dribbble_circle icon2x"></i></a>
        <a href="mailto:contact@mfglabs.com"><i class="icon-paperplane_black icon2x"></i></a>
        </span>
      </div>
      </div>
  </footer>

<!--End Pattern HTML-->

        <!-- script -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="js/highlight.pack.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        <script>$(document).ready(function() {
        $('pre code').each(function(i, e) {hljs.highlightBlock(e)});
        });</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-19574063-2'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
