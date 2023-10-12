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
 * Community profile field.
 *
 * @package   profilefield_community
 * @copyright  2023 David Herney @ BambuCo
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Class profile_define_community.
 * @copyright  2023 David Herney @ BambuCo
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class profile_define_community extends profile_define_base {

    /**
     * Add elements for creating/editing a community profile field.
     *
     * @param moodleform $form
     */
    public function define_form_specific($form) {

        // Select available options: new community and link with a public community.
        $form->addElement('advcheckbox', 'param1', get_string('newcommunity', 'profilefield_community'));
        $form->setType('param1', PARAM_BOOL);

        $form->addElement('advcheckbox', 'param2', get_string('linkcommunity', 'profilefield_community'));
        $form->setType('param2', PARAM_BOOL);
    }
}
