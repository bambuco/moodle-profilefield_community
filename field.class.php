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
 * Profile field implementation.
 *
 * @package   profilefield_community
 * @copyright 2023 David Herney @ BambuCo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Class profile_field_community
 *
 * @copyright 2023 David Herney @ BambuCo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class profile_field_community extends profile_field_base {

    /**
     * Add elements for editing the profile field value.
     * @param moodleform $mform
     */
    public function edit_field_add($mform) {
        global $PAGE, $OUTPUT;

        $communities = [
            (object) ['id' => 1, 'name' => 'Comunidad 1'],
            (object) ['id' => 2, 'name' => 'Comunidad 2'],
        ];
        $cannew = $this->field->param1 == '1';
        $canlink = $this->field->param2 == '1' && !empty($communities);

        $data = (object) [
            'inputname' => $this->inputname,
            'cannew' => $cannew,
            'canlink' => $canlink,
            'hastabs' => $cannew && $canlink,
            'communities' => $communities,
        ];

        $html = $OUTPUT->render_from_template('profilefield_community/signup', $data);

        // Create the form field.
        $mform->addElement('static', $this->inputname, '', $html);

        $PAGE->requires->js_call_amd(
            'profilefield_community/main',
            'signup',
            [$this->inputname]
        );

    }

    /**
     * Display the data for this field.
     *
     * @return string HTML.
     */
    public function display_data() {
        // El valor está en $this->data y toiene las otras propiedades: $this->inputname

        return 'Acá es lo que se muestra en el perfil del usuario';
    }

    /**
     * Return the field type and null properties.
     * This will be used for validating the data submitted by a user.
     *
     * @return array the param type and null property
     * @since Moodle 3.2
     */
    public function get_field_properties() {
        return [PARAM_RAW, NULL_ALLOWED];
    }
}


