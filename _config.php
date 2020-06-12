<?php
/**
 * Silverstripe module config file.
 *
 * @author Firebrand <hello@firebrand.nz>
 * @license MIT
 * @package silverstripe-excel-export
 */
use \SilverStripe\Control\Director;

define('EXCELEXPORT_DIR', ltrim(Director::makeRelative(realpath(__DIR__)), DIRECTORY_SEPARATOR));
