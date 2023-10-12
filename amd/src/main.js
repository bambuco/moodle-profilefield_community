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
 * Javascript to manage the field.
 *
 * @copyright 2023 David Herney @ BambuCo
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
import $ from 'jquery';

/**
 * Component to signup page.
 *
 * @method signup
 *
 * @param {string} fieldname
 */
export const signup = (fieldname) => {

    var $manager = $('#mng-' + fieldname);
    var $body = $('#box-' + fieldname);

    var visibilityController = function () {

        if ($manager.is(':checked')) {
            $body.show(200);
        } else {
            $body.hide(200);
        }
    };

    $manager.on('click', function() {
        visibilityController();
    });

    visibilityController();

};
