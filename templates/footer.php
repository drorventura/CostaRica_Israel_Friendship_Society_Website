<div id="main_footer">

    <div id="sitemap">
        <div class="col_footer"> 
            <div class="col_header" >Home </div>
            <ul>
                <li> <a href="./">Home Page</a></li>
            </ul>

        </div>
        <div class="col_footer"> 
            <div class="col_header" >About us</div>
            <ul>
                <li> <a href="/costaRicaIsrael/aboutus.php#who_are_we_tag">Who Are We?</a></li>
                <li> <a href="/costaRicaIsrael/aboutus.php#members_tag">Members</a></li>
            </ul>
        </div>

        <div class="col_footer"> 
            <div class="col_header" >Subscribe </div>
            <ul>
                <li> <a href="/costaRicaIsrael/subscribe.php">Subscribe</a></li>
                <li> <a href="/costaRicaIsrael/unsubscribe.php">Unsubscribe</a></li>
            </ul>
        </div>
        <div class="col_footer"> 
            <div class="col_header" >Know Costa-Rica </div>
            <ul>
                <li> <a href="/costaRicaIsrael/contest.php">Details</a></li>
                <li> <a href="/costaRicaIsrael/contest.php#registration_tag">Sign up</a></li>
                <li> <a href="/costaRicaIsrael/contest.php#know_the_winners_tag">Know The Winners</a></li>
            </ul>
        </div>
        <div class="col_footer"> 
            <div class="col_header" >Contact Us </div>
            <ul>
                <li> <a href="/costaRicaIsrael/contact.php">Email Us</a></li>
                <li><br></li>
            <?php
                if (isset($_SESSION['username'])) {
                    echo '<li> Welcome: <u>'.$_SESSION['username']."</u>".
                        '<a href="/costaRicaIsrael/utils/logout.php" id="adminLogIn"> (Log Out)</a>';
                } else {
                    echo '<li><div class="col_header">Admin 
                        <a href="/costaRicaIsrael/panel.php" id="adminLogIn">(Log In) </a></div></li>';
                }
            ?>
            </ul>
        </div>
    </div>

    <div id="main_footer_copyNres">
        <span id="Copyright"> &copy; Copyright 2014, 
            <a href="http://www.eldardamari.com" target="_blank">Eldar Damari</a>,
            <a href="http://www.drorventura.com" target="_blank">Dror Ventura</a></span>
            <span id="resolution"> 1024x768</span>
    </div>
</div>
