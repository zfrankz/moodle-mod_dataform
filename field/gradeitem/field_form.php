<?php
// This file is part of Moodle - http://moodle.org/.
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
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.
 
/**
 * @package dataformfield
 * @subpackage gradeitem
 * @copyright 2012 Itamar Tzadok
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once("$CFG->dirroot/mod/dataform/field/field_form.php");

class mod_dataform_field_gradeitem_form extends mod_dataform_field_form {

    /**
     *
     */
    function field_definition() {
        global $DB;

        $mform =& $this->_form;

    //-------------------------------------------------------------------------------
        $mform->addElement('header', 'fieldattributeshdr', get_string('fieldattributes', 'dataform'));
        
        // Info field
        $options = $DB->get_records_menu('grade_items', array(), 'itemname', 'id,itemname');
        $options = array('' => get_string('choosedots')) + $options;
        $mform->addElement('select', "param1", get_string('gradeitem', 'dataformfield_gradeitem'), $options);
    }

}
