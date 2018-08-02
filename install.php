<?php
add_integration_function('integrate_theme_include', '$sourcedir/recaptcha/autoload.php', TRUE);
add_integration_function('integrate_theme_include', '$sourcedir/recaptcha/recaptcha-for-smf.php', TRUE);
add_integration_function('integrate_load_theme', 'load_recaptcha', TRUE);