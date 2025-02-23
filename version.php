<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Information about the version of the plugin.
 *
 * @package   local_webhooks
 * @copyright 2017 "Valentin Popov" <info@valentineus.link>
 * @copyright 2023 The Training Room Online {@link https://www.ttro.com}
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @global $plugin
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_webhooks';
$plugin->maturity = MATURITY_STABLE;
$plugin->version = 2023060901;
$plugin->release = "3.9.0 (Build: $plugin->version)";
$plugin->requires  = 2020061500;        // Requires this Moodle version.
$plugin->supported = [39, 39];
