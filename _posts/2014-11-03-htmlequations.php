<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/Equation_Editor.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>LaTeX Equations in HTML | CodeCogs Equation Editor</title>
<meta name="description" content="The CodeCogs LaTeX Engine is designed specifically to create equations for placement on Internets and Intranets."/>
<meta name="keywords" content="Fast equations for the Intranet"/>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="/css/site-combo18.css" type="text/css"/>
<script src="/js/site16.js" type="text/javascript"></script>
<!--[if lte IE 7]><link rel="stylesheet" href="/css/ie6.css" type="text/css" /><![endif]-->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 { color: #FF0000 }
pre .latex { border:3px solid red; }
</style>
<script src="/js/site16.js" type="text/javascript"></script>

<script type="text/javascript" src="http://latex.codecogs.com/latexit.js"></script>
<script type="text/javascript">
LatexIT.add('p',true);
</script>
<!-- InstanceEndEditable -->
</head>
<body>
<article><div id="wrap">

<header>

  <div id="top">
    <!--div to be removed in HTML5-->
    <div id="topleft"><a href="/index.php"><img src="/images/logo3.png" width="178" height="46" alt="CodeCogs" title="Site Map"/></a></div>
    <div id="topcenter"><div>
  <a href="http://www.codecogs.com/index.php"><img src="/images/ficons/house.png"/>HOME</a><a href="http://www.codecogs.com/library.php"><img src="/images/ficons/book_open.png"/>LIBRARY</a><big><a href="http://www.codecogs.com/products.php"><img src="/images/ficons/package_green.png"/>PRODUCTS</a></big><a href="http://www.codecogs.com/forum.php"><img src="/images/ficons/comments.png"/>FORUMS</a><a href="https://www.codecogs.com/cart.php"><img src="/images/ficons/cart.png"/>CART</a>    </div>
    <div class="mini">
        
    </div>
    </div>
    <!-- center -->
    <div id="topright">
<div class="join"><a href="tel:+442071939303"><strong>Tel:</strong> +44 (0) 20 7193 9303</a>
		<a href="https://www.codecogs.com/pages/email/sendmail.php?cc=1"><strong>Email Us</strong></a>
		<a href="https://www.codecogs.com/general.php?subindex=2">Join CodeCogs</a></div><a href="/general.php?subindex=3" onclick="$('#cc_login').fadeToggle('slow','linear',function(){ $('form.openid:eq(0)').openid(); }); return false"><img class="door_in" src="/images/spacer.gif"/> Login</a>    </div><!-- topright -->
  </div>
  
  <div id="cc_login">
    <div class="logbox">
      <form id="minilogin" method="post" action="https://www.codecogs.com/pages/security/login.php">
				<input type="hidden" name="state" value="14a4ed624f0ed9dfdbc67bce774d23d6"/>
        <p>
        <label for="login_username">Email or Screen Name</label><br/>
        <input class="text" type="text" id="login_username" name="login_username" value="" maxlength="40"  size="17" />
        </p>
        <p>
        <label for="login_password">Password</label><br/>
        <input class="text" type="password" id="login_password" name="login_password" value="" maxlength="50" size="17" />
        </p>
        <!--<input type="checkbox" name="keep_login" />
        <label for="login_keep_login">Keep me logged in</label><br/>-->
        <input name="login" type="hidden" value="1"/>
        <button type="submit" class="orangeb">Login</button>
        <p class="lost"><a href="https://www.codecogs.com/general.php?subindex=1">I have forgotten<br/>my Password</a></p>
      </form>
    </div>

    <div style="clear:both; border-top:1px solid #bbb">
      <div class="logbox">
        <p>Or login with:</p>
        <form class="openid" method="post" action="https://www.codecogs.com/pages/security/login.php">
          <ul class="providers">
            <li class="direct" title="Facebook"><img src="/images/openID/facebookW.png" alt="Facebook"/><span>http://facebook.com/</span></li>
         <!--   <li class="direct" title="Twitter"><img src="/images/openID/twitterW.png" alt="Twitter"/><span>http://twitter.com/</span></li> -->
            <li class="direct" title="Google"><img src="/images/openID/googleW.png" alt="Google"/><span>https://www.google.com/accounts/o8/id</span></li>
            <li class="direct" title="Yahoo"><img src="/images/openID/yahooW.png" alt="Yahoo"/><span>https://me.yahoo.com</span></li>
          </ul>
          <input class="text" type="hidden" id="openid_identifier" name="openid_identifier" />
        </form>
      </div>
    </div>
  </div>
</header>

<div class="leftpanel">
<div class="inner">
<!-- InstanceBeginEditable name="menu" -->
<div class="header"><div class="browser"><div class="search">
<form method="get" action="/pages/search.php">
<input type="search" results="10" placeholder="Search..." id="q" name="q" class="text" size="15" onkeyup="searchchange(this)" title="search text" value="" />
<input type="hidden" name="cx" value="partner-pub-2780686041799472:soot2dijuck" />
<input type="hidden" name="cof" value="FORID:10" />
<input type="hidden" name="ie" value="ISO-8859-1" />
</form>
<div><a href="/pages/search.php"><img src="/images/top/advanced.gif" alt="advanced search" style="width:115px; height:9px;" /></a></div>
<div id="searchresults"></div>
</div>
</div></div><div class="spacer"></div><div class="header"><div class="browser"><ul><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/about.php" >About</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/licence.php" >Buy</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/pages/forums/forum_view.php?f=28&menu=eqneditor" >Forum</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/usage.php" >Usage Policy</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/history.php" >History</a></li></ul></div></div><div class="header"><div class="top">Editor Integration</div><div class="browser"><ul><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/design.php" >Design</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/quick-install.php" >Quick Install</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/editor-api.php" >Editor API</a></li></ul></div></div><div class="header"><div class="top">Plugins</div><div class="browser"><ul><li class="bmenu selected"><img class="close_x" src="/images/spacer.gif" alt=">>" /><a href="/latex/integration/htmlequations.php" >HTML</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/integration/blogger/install.php" >Blogger</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/integration/ckeditor_v3/install.php" >CK Editor v3x</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/integration/ckeditor_v4/install.php" >CK Editor v4x</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/integration/tinymce_v3/install.php" >Tiny MCE v3x</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="/latex/integration/tinymce_v4/install.php" >Tiny MCE v4x</a></li></ul></div></div><div class="header"><div class="top">3rd Party Links *</div><div class="browser"><ul><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="http://wordpress.org/extend/plugins/codecogs-latex-equation-editor/" >Wordpress</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="http://alexeev.org/gmailtex.html" >GmailTeX</a></li></ul></div></div><div class="header"><div class="top">Videos featuring the Editor *</div><div class="browser"><ul><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="http://www.youtube.com/watch?v=DmMrpIFfydc" >Moodle</a></li><li class="bmenu"><img class="close" src="/images/spacer.gif" alt=">>" /><a href="http://www.youtube.com/watch?v=UFx2BUx6HLw" >Your Wave</a></li></ul></div></div><small><strong>* Warning:</strong> CodeCogs is not responsible for content on external sites.</small><!-- InstanceEndEditable -->
</div>
</div><!-- left panel -->

<div class="content80">

<!-- InstanceBeginEditable name="title" -->
<span class="topcomps"><a href="/products.php">Products</a> &raquo; <a href="/latex/about.php">Equation Editor</a> &raquo; </span><div class="title blue"><img class="eqn_editor_50" src="/images/spacer.gif"/><h1 class="indent">Equations in HTML (SVG + GIF)</h1></div><!-- InstanceEndEditable -->

<!-- InstanceBeginEditable name="body" -->
<div class="cent">
<p>The CodeCogs LaTeX Engine is designed specifically to create equations for placement on intranets and the Internet.</p>

<p>The simplest way to get started is by using the  <a href="eqneditor.php">Equation Editor</a>, which produces HTML-friendly code in the yellow box at the bottom of the editor. You can then copy this code into any HTML page and an equation will appear.</p>
<p>For more advanced use, you can use one or more of the methods demonstrated on this page.  </p>
<h2>&lt;IMG&gt;  Tag (Editor type=&quot;html&quot;)</h2>
<p>At the simplest and most fundamental level,  equations can be created  using a single HTML image tag. For example, the following HTML code:</p>
<pre class="greybox width600">&lt;img src=&quot;<span class="style2">http://latex.codecogs.com/<strong>gif</strong>.latex?</span><strong>1+sin(x)</strong>&quot; border=&quot;0&quot;/&gt;</pre>
<p>will create:</p>
<div class="yellowbox width200"><img src="http://latex.codecogs.com/gif.latex?1+sin(x)" border="0"/></div>
<p>This image tag is used extensively by those who need to show equations in third-party forums, blogs, or on their websites. It allows equations to be created without installing any additional code. This GIF format is the most common, as it works across all known browsers. Unfortunately, GIFs are not adequate for printing. The GIF is a raster image, with only 100 dpi; whereas, for printing, you need about 300 dpi. </p>
<p>An alternative is to use SVG, which is a new vector-based graphics format. This is rapidly becoming standard across all browsers. Currently, only Internet Explorer doesn't accept SVG. However, various flash plugins rectify this. Therefore, you can use:</p>
<pre class="greybox width600">&lt;img src=&quot;<span class="style2">http://latex.codecogs.com/<strong>svg</strong>.latex?</span><strong>1+sin(x)</strong>&quot; border=&quot;0&quot;/&gt;</pre>
<p>will create:</p>
<div class="yellowbox width200"><img src="http://latex.codecogs.com/svg.latex?1+sin(x)" border="0"/></div>
(or not if you're using IE 6, 7 or 8!)
<p>This should look identical to the earlier image; however, if you print this page or zoom in, you will notice a significant difference.</p>

<h2>Automatic Equations for Whole Pages</h2>
</div>

<div class="rightpanel">
<a class="button download" href="/pages/functions/download.php?dir=/latex~7a1bbcadd9&file=latexit.js~8cc3e2f22a"><img class="download_img js" src="/images/spacer.gif" /><span class="main">Download</span><span class="sub">plugin for HTML</span><span class="info">Published: 12/02/14 &nbsp; &nbsp; Size:4 KB</span></a>
<h5>JavaScript Options</h5>
<ul>
<li>LatexIT.add('p',true);</li>
</ul>
<h5>CSS Style</h5>
<ul>
<li>.latex { ... }</li>
</ul>
</div>
<div class="cent">

<p>If you have a lot of equations to generate, writing out the above code for each is a little laborious. Furthermore, you  need two different html  code depending up the browser that your visitors are using - IE and anything else! To overcome this, we have developed the <strong>http://latex.codecogs.com/latexit.js</strong> script, which automates the conversion of equations found on your page. </p>
<p>All you need to do is load the script <strong>http://latex.codecogs.com/latexit.js</strong> in the header of your page: </p>
<pre class="greybox">&lt;html&gt;
&lt;head&gt;
<span class="style2">&lt;script type=&quot;text/javascript&quot; src=&quot;<strong>http://latex.codecogs.com/latexit.js</strong>&quot;&gt;&lt;/script&gt;</span>
&lt;/head&gt;
<strong></strong>&lt;body&gt;</pre>
<p>We have developed two methods for doing this:</p>
<h4>Add attribute lang=&quot;latex&quot; to tags</h4>
<p>Adding the attribute <em>lang=&quot;latex&quot;</em> to any tag will automatically treat the content of that tag as a LaTeX equation and covert it into a graphical form. For example:</p>
<pre class="greybox width200">&lt;div <span class="style2">lang=&quot;latex&quot;</span>&gt;
\frac{1+sin(x)}{y}
&lt;/div&gt;
</pre>
<p>will create:</p>
<div class="yellowbox width200"><div lang="latex">
\frac{1+sin(x)}{y}
</div></div>
<p>Thus, a complete HTML would be:</p>
<pre class="greybox">&lt;html&gt;
&lt;head&gt;
<span class="style2">&lt;script type=&quot;text/javascript&quot; src=&quot;<strong>http://latex.codecogs.com/latexit.js</strong>&quot;&gt;&lt;/script&gt;</span>
&lt;/head&gt;
<strong></strong>&lt;body&gt;
Here are my formulas
<span class="style2">&lt;div <strong>lang=&quot;latex&quot;</strong>&gt;</span>1+sin(x)^2+3<span class="style2">&lt;/div&gt;
&lt;ul&gt;
&lt;li <strong>lang=&quot;latex&quot;</strong>&gt;</span>x^2+y^2+z^2<span class="style2">&lt;/li&gt;
&lt;li&gt;</span>a^2+b^2<span class="style2">&lt;/li&gt;
&lt;/ul&gt;</span>
&lt;/body&gt;
&lt;/html&gt;</pre>

will create:
<div class="yellowbox">
Here are my formulas
<div lang="latex">1+sin(x)^2+3</div>
<ul>
<li lang="latex">x^2+y^2+z^2</li>
<li>a^2+b^2</li>
</ul>
</div>
<p>The third formula is not converted because <em>lang=&quot;latex&quot;</em> was not entered against the second <em>&lt;li&gt;</em> tag.</p>
<p>Using the <em>&lt;span lang=&quot;latex&quot;&gt;...&lt;/span&gt;</em>, you can produce equations in line with the surrounding text. For example:</p>
<pre class="greybox">
&lt;p&gt;This equation &lt;span lang=&quot;latex&quot;&gt;\frac{1+sin(x)}{x^3}&lt;/span&gt;
appears on the same line at the text.&lt;/p&gt;
</pre>
creates:
<div class="yellowbox width300">
<p>This equation <span lang="latex">\frac{1+sin(x)}{x^3}</span> appears on the same line at the text.</p>
</div>

<h4>LaTeX Tags \[...\] and $...$ (Editor type=&quot;latex&quot;)</h4>
<p>If you are writing many equations, or if you prefer the usual LaTeX techniques for entering equations within text, then you may choose a variant on the above method that converts \\[...\\] and \$...\$ into block and inline equations, respectively. For example:</p>
<pre class="greybox width400">When you add <span class="style2">$x^2$</span> to <span class="style2">$y^2$</span> you get <span class="style2">\[x^2+y^2\]</span></pre>
<p>will create:</p>
<p class="yellowbox width400">
When you add $x^2$ to $y^2$ you get
\[x^2+y^2\]</p>
<p>Given than \$ is often used within javascript (particularly in jQuery) that might otherwise exist on a page, we recommend constraining this general LaTeX conversion to certain tags. Typically these might be  <em>&lt;p&gt;...&lt;/p&gt;</em> and <em>&lt;li&gt;...&lt;/li&gt;</em>tags. Second if you do find yourself wanting to write dollar (\$), then you must add a backslash (\) before the dollar, as in (\\$). </p>
<p>This approach is not enabled by default, so you have to call <span class="style2">LatexIT.add('p',true);</span> to identify the tags that you want to be treated in this way. The following example illustrate a complete HTML page with a variety of equations written in native LaTeX form: </p>
<pre class="greybox">
&lt;html&gt;
&lt;head&gt;
<span class="style2">&lt;script type=&quot;text/javascript&quot; src=&quot;<strong>http://latex.codecogs.com/latexit.js</strong>&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;
LatexIT.add('p',true);
&lt;/script&gt;</span>
&lt;/head&gt;<br /><strong></strong>&lt;body&gt;<br /><span class="style1">&lt;p&gt;</span>Dividing <span class="style2">$</span>x^2+1<span class="style2">$</span> by <span class="style2">$</span>y^2<span class="style2">$</span> gives <span class="style2">\[</span>\frac{x^2+1}{y^2}<span class="style2">\]<strong>&lt;/p&gt;</strong></span>
<span class="style1">&lt;p&gt;</span>The british pound is worth 1.5 US\$ or $1.1 \euro$<span class="style1">&lt;/p&gt;</span><br />&lt;/body&gt;<br />&lt;/html&gt;
</pre>
which creates:
<p class="yellowbox width400">Dividing $x^2+1$ by $y^2$ gives \[\frac{x^2+1}{y^2}\]</p>
<p class="yellowbox width400">The british pound is worth 1.5 US\$ or $1.1 \euro$.</p>
<h2>Equation CSS Formatting</h2>
<p>To  control the layout of the equations (background, border, position etc), then you can modify the .latex CSS style.</p>
<p> If you adopt a convention of using <em>&lt;div lang=&quot;latex&quot;&gt;</em> for block equations that appear on their own lines, versus say <em>&lt;span lang=&quot;latex&quot;&gt;</em> for equations you want to appear inline, then you can control each independently within your CSS, i.e,:</p>
<ul>
  <li><em>.latex {...}</em> for <strong>all</strong> equations</li>
  <li><em>span .latex {...}</em> for inline equations </li>
  <li><em>div .latex {...}</em> for block equations</li>
</ul>
<p>In the following example, we place our equation within a <strong>&lt;pre&gt;</strong> tag, and set the border to red:</p>
<pre class="greybox">
&lt;html&gt;
&lt;head&gt;
<span class="style2">&lt;script type=&quot;text/javascript&quot; src=&quot;<strong>http://latex.codecogs.com/latexit.js</strong>&quot;&gt;&lt;/script&gt;</span>
&lt;style&gt;
  <span class="style2">pre .latex { border:3px solid red ; }</span>
&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
  &lt;pre lang=&quot;latex&gt;E=mc^2&lt;/pre&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<pre lang="latex">E=mc^2</pre>
</div>

<!-- InstanceEndEditable -->

</div> <!--content -->

<!-- InstanceBeginEditable name="forum" -->
<!-- InstanceEndEditable -->

<footer>
<div class="clear"></div>
<div class="footer">
  <div class="copyright">
  CodeCogs &copy; 2004-2014 Zyba Ltd 
  <br/>
    <a href="http://www.instantssl.com" id="comodoTL">Premium SSL Certificate</a>
    <script type="text/javascript">TrustLogo("/images/ssl/comodo_secure_76x26_white.png", "SC5", "none");</script>
  </div>
  <div class="column">
  <a href="/pages/addins/catch22.php"><div class="magic"></div></a>
  <ul>
    <li>CodeCogs</li>
    <li><a href="/index.php">Home</a></li>
    <li><a href="/library.php">Library</a></li>
    <li><a href="/products.php">Products</a></li>
    <li><a href="/sitemap.php">Site map</a></li>
  </ul> 
  </div>
  <div class="column">
  <ul>
    <li>Community</li>
    <li><a href="/pages/members/members.php">Membership</a></li>
    <li><a href="/pages/forums/forum_view.php?f=2">News</a></li>
    <li><a href="http://www.twitter.com/codecogs">Twitter</a></li>
		<li><a href="http://www.facebook.com/CodeCogs">Facebook</a></li>
		<li><a href="http://www.linkedin.com/company/codecogs">Linked in</a></li>
   <!-- <li><a href="http://www.facebook.com">Facebook</a></li> -->
   <!-- <li><a href="http://www.linkedin.com">Linkedin</a></li> -->
  </ul>
  </div>
  <div class="column">
  <ul>
    <li>About Us</li>
    <li><a href="/pages/help/about.php">Background</a></li>
    <li><a href="/pages/help/credits.php">Credits</a></li>  
    <li><a href="/pages/agreements/termsofuse.php">Terms</a></li>
    <li><a href="/pages/agreements/privacy_policy.php">Privacy</a></li>
    <li><a href="/pages/licences/summary.php">Copyright</a></li>
  </ul>
  </div>
  <div class="column">
  <ul>
    <li>Support</li>
    <li><a href="/forum.php">Forums</a></li>
    <li><a href="/pages/help/faq.php">FAQ</a></li>
    <li><a href="/pages/email/sendmail.php?cc=1">Contact Us</a></li>
  </ul>
  </div>
</div>
<div class="clear">&nbsp;</div>
</footer>
<script type="text/javascript">
var _gaq=[["_setAccount","UA-2946818-1"],["_trackPageview"]];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
s.parentNode.insertBefore(g,s)}(document,"script"));
</script>
</div></article><!-- wrap -->

</body>
<!-- InstanceEnd --></html>
