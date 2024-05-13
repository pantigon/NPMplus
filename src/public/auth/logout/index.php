<?php
session_unset();
session_destroy();
header("Location: /auth/login", true, 307);
exit;
