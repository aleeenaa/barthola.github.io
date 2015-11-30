<?php

if(isset($page)) {

?>

<footer id="footerNav">
    <ul id="sitemap" class="nav pull-left fCell">
        <li><a href="../sitemap.php" id="sitemap">Sitemap</a></li>
    </ul>
    <div id="resourceLinks" class="fCell">
        <a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s HTML" class="validate-html">HTML</a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS" class="validate-css">CSS</a>
        <a href="https://github.com/barthola/portfolio" title="Fork this site on Github"
        class="github">GH</a>
    </div>
    <ul id="admin" class="nav pull-right fCell">
        <li><a href="../admin/" id="admin">Admin</a></li>
    </ul>
</footer>
</body>
</html>

<?php }
