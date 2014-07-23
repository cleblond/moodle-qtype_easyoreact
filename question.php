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
 * marvin Molecular Editor question definition class.
 *
 * @package    qtype
 * @subpackage easyoreact
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/question/type/shortanswer/question.php');


/**
 * Represents a easyoreact question.
 *
 * @copyright  1999 onwards Martin Dougiamas {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class qtype_easyoreact_question extends qtype_shortanswer_question {
	// all comparisons in easyoreact are case sensitive
	public function compare_response_with_answer(array $response, question_answer $answer) {



//	if ($answer->answer == '*') {
//            return false;
//        }

	$char=array(".", ">");
	$ranswer=str_replace($char, ' ', trim($response['answer']));
	$aanswer=str_replace($char, ' ', trim($answer->answer));
	$ra=explode(" ",$ranswer);
	$aa=explode(" ",$aanswer);

	sort($ra);
	sort($aa);
	
	if(count($ra)!==count($aa)){return false;
	}
	else{
	sort($ra);
	sort($aa);
		if($ra==$aa){return true;
		}
		else{
		return false;}
	}


//	return true;


    }
	
	public function get_expected_data() {
        return array('answer' => PARAM_RAW, 'easyoreact' => PARAM_RAW, 'mol' => PARAM_RAW);
    }
}
