<?php
function db() : SQLite3
{
    $db = new SQLite3("/data/npmplus.sqlite");
    $db->exec("CREATE TABLE IF NOT EXISTS config (key CHAR(255) UNIQUE NOT NULL, value CHAR(255) NOT NULL)");
    $db->exec("INSERT OR IGNORE INTO config (key, value) VALUES ('mail_host', ''), ('mail_address', ''), ('mail_pswd', '')");
    $db->exec("CREATE TABLE IF NOT EXISTS auth (email CHAR(255) UNIQUE NOT NULL, pswd CHAR(255) NOT NULL, totp CHAR(255) NOT NULL)");
    //$db->exec("INSERT OR IGNORE INTO auth (email, pswd, totp) VALUES ('', '', '')");
    $db->exec("VACUUM");
    return $db;
}
