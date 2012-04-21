<?php

// This file is part of Consultation module for Moodle.
//
// Consultation is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Consultation is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Consultation.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Module version info
 *
 * @package    mod
 * @subpackage consultation
 * @copyright  2009-2012 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$module->version  = 2012042100;  // module version
$module->release  = 'v2.00beta1'; // human-friendly version name
$module->requires = 2010111300;  // requires this Moodle version
$module->cron     = 60;

$module->component = 'mod_consultation'; // Full name of the plugin (used for diagnostics)
$module->maturity  = MATURITY_ALPHA;

