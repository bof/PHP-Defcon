--TEST--
double quoted string nul
--INI--
defcon.config-file = tests/quoted_double_basic06.conf
error_log = /dev/null
--FILE--
<?php
echo DEFCON_STRING_1 . "\n";
echo DEFCON_STRING_2 . "\n";
echo DEFCON_STRING_3 . "\n";
?>
--EXPECTF--
"\0" embedded nul:   - fine
"\01" embedded nul is-not-octal special case:  1 - fine
"\x0" hex embedded nul:   - fine
