<?php

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtext('qtype_easyoreact_options', get_string('easyoreact_options', 'qtype_easyoreact'),
                   get_string('configeasyoreactoptions', 'qtype_easyoreact'), '', PARAM_TEXT));
}

