<nav>
    <ul>
        <li><a href="./"><strong>VanillaCMS</strong></a></li>
    </ul>
    <ul>
        <li><a href="https://github.com/rognoni/vanillacms">GitHub</a></li>
        <li><a href="https://forum.it.altervista.org/">Forum 🇮🇹</a></li>
        <li>
            <a href="?a=login">
                <?php if (isset($_SERVER['PHP_AUTH_USER'])) { echo "@" . $_SERVER['PHP_AUTH_USER']; } else { echo "Login"; } ?>
            </a>
        </li>
    </ul>
</nav>
<?php if (isset($_SERVER['PHP_AUTH_USER'])) { ?>
<p>
    <a href='<?= "?a=edit_md&c={$filepath}" ?>'>📝Edit</a> &nbsp;
    <a href="http://log:out@127.0.0.1/?a=login">👋Logout</a>
    <!-- a href="https://log:out@laravista.altervista.org/VanillaCMS/?a=login">👋Logout</a -->
</p>
<?php } ?>
