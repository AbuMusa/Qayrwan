<?php
/**
 * Pieforms: Advanced web forms made easy
 * Copyright (C) 2006-2008 Catalyst IT Ltd (http://www.catalyst.net.nz)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    pieform
 * @subpackage rule
 * @author     Nigel McNie <nigel@catalyst.net.nz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2006-2008 Catalyst IT Ltd http://catalyst.net.nz
 *
 */

/**
 * Checks whether the field has been specified.
 *
 * @param Pieform $form    The form the rule is being applied to
 * @param string  $value   The value of the field
 * @param array   $element The element to check
 * @param string  $check   Whether to check the element
 * @return string         The error message, if the value is invalid.
 */
function pieform_rule_required(Pieform $form, $value, $element, $check) {/*{{{*/
    if ($check && ($value == '' || $value == array())) {
        return $form->i18n('rule', 'required', 'required', $element);
    }
}/*}}}*/

function pieform_rule_required_i18n() {/*{{{*/
    return array(
        'en.utf8' => array(
            'required' => 'This field is required'
        ),
        'de.utf8' => array(
            'required' => 'Das Feld ist erforderlich'
        ),
        'fr.utf8' => array(
            'required' => 'Ce champ est obligatoire'
        ),
        'ja.utf8' => array(
            'required' => 'このフィールドは、必須入力フィールドです。'
        ),
        'es.utf8' => array(
            'required' => 'Este campo es obligatorio'
        ),
        'sl.utf8' => array(
            'required' => 'To polje je zahtevano'
        ),
        'nl.utf8' => array(
            'required' => 'Dit veld is vereist'
        ),
        'cs.utf8' => array(
            'required' => 'Povinné pole'
        ),

    );
}/*}}}*/

?>