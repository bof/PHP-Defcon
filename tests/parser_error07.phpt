--TEST--
Fail missing equal sign
--INI--
defcon.config-file = tests/parser_error07.conf
error_log = /dev/null
--FILE--
<?php
echo "OK\n";
?>
--EXPECT--
Fatal error: defcon: tests/parser_error07.conf line 7: Strange input 'w' ('=' required) in Unknown on line 0
OK
