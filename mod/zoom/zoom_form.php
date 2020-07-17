//moodleform is defined in formslib.php

<?php
require_once("$CFG->libdir/formslib.php");
 
class zoom_form extends moodleform {
    //Add elements to form
    public function definition() {
        global $CFG;
 
        $mform = $this->_form; // Don't forget the underscore! 
 
        $mform->addElement('text', 'url', get_string('url')); // Add elements to your form
        $mform->setType('url', PARAM_NOTAGS);                   //Set type of element
        $mform->setDefault('url', 'Please Paste Zoom Link');        //Default value
    }
    //Custom validation should be added here
    function validation($data, $files) {
        return array();
    }
}

?>


