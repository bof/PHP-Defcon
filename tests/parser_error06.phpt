--TEST--
Fail constant name being keyword
--INI--
defcon.config-file = tests/parser_error06.conf
error_log = /dev/null
--FILE--
<?php
echo "OK\n";
?>
--EXPECT--
Fatal error: defcon: tests/parser_error06.conf line 7: Constant name 'string' should not be a keyword in Unknown on line 0
OK
