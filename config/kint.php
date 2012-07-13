<?php

/** @var bool if set to false, kint will become silent, same as Kint::enabled(false) */
$config['enabled'] = true;


/**
 * @var callback
 *
 * @param string $file filename where the function was called
 * @param int|null $line the line number in the file (not applicable when used in resource dumps)
 */
$config['pathDisplayCallback'] = "kint::_debugPath";


/**
 * @var callback|null
 *
 * @param array $step each step of the backtrace is passed to this callback to clean it up or skip it entirely
 * @return array|null you can return null if you want to bypass outputting this step
 */
$config['traceCleanupCallback'] = null;


/** @var int max length of string before it is truncated and displayed separately in full */
$config['maxStrLength'] = 60;


/** @var bool whether to add a right colored gutter based on the location of the call to the dump */
$config['colorCodeLoops'] = true;


/** @var int max array/object levels to go deep, if zero no limits are applied */
$config['maxLevels'] = 5;


/** @var bool whether dumped indexed arrays that are in ideal sequence are displayed */
$config['hideSequentialKeys'] = true;


/** @var string the css file to format the output of kint */
$config['skin'] = 'kint.css';


/** @var string|null if set, prepends a <head> tag with appropriate meta charset value (issue 7) */
$config['charset'] = null;


/** @var bool only set to true if you want to develop kint and know what you're doing */
$config['devel'] = false;