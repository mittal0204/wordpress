<?php
/**
 Admin Page Framework v3.7.6b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/server-information>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class ServerInformation_AdminPageFramework_Message {
    public $aMessages = array();
    public $aDefaults = array('option_updated' => 'The options have been updated.', 'option_cleared' => 'The options have been cleared.', 'export' => 'Export', 'export_options' => 'Export Options', 'import_options' => 'Import', 'import_options' => 'Import Options', 'submit' => 'Submit', 'import_error' => 'An error occurred while uploading the import file.', 'uploaded_file_type_not_supported' => 'The uploaded file type is not supported: %1$s', 'could_not_load_importing_data' => 'Could not load the importing data.', 'imported_data' => 'The uploaded file has been imported.', 'not_imported_data' => 'No data could be imported.', 'upload_image' => 'Upload Image', 'use_this_image' => 'Use This Image', 'insert_from_url' => 'Insert from URL', 'reset_options' => 'Are you sure you want to reset the options?', 'confirm_perform_task' => 'Please confirm your action.', 'specified_option_been_deleted' => 'The specified options have been deleted.', 'nonce_verification_failed' => 'A problem occurred while processing the form data. Please try again.', 'check_max_input_vars' => 'Not all form fields could not be sent. Please check your server settings of PHP <code>max_input_vars</code> and consult the server administrator to increase the value. <code>max input vars</code>: %1$s. <code>$_POST</code> count: %2$s', 'send_email' => 'Is it okay to send the email?', 'email_sent' => 'The email has been sent.', 'email_scheduled' => 'The email has been scheduled.', 'email_could_not_send' => 'There was a problem sending the email', 'title' => 'Title', 'author' => 'Author', 'categories' => 'Categories', 'tags' => 'Tags', 'comments' => 'Comments', 'date' => 'Date', 'show_all' => 'Show All', 'show_all_authors' => 'Show all Authors', 'powered_by' => 'Thank you for creating with', 'and' => 'and', 'settings' => 'Settings', 'manage' => 'Manage', 'select_image' => 'Select Image', 'upload_file' => 'Upload File', 'use_this_file' => 'Use This File', 'select_file' => 'Select File', 'remove_value' => 'Remove Value', 'select_all' => 'Select All', 'select_none' => 'Select None', 'no_term_found' => 'No term found.', 'select' => 'Select', 'insert' => 'Insert', 'use_this' => 'Use This', 'return_to_library' => 'Return to Library', 'queries_in_seconds' => '%1$s queries in %2$s seconds.', 'out_of_x_memory_used' => '%1$s out of %2$s MB (%3$s) memory used.', 'peak_memory_usage' => 'Peak memory usage %1$s MB.', 'initial_memory_usage' => 'Initial memory usage  %1$s MB.', 'allowed_maximum_number_of_fields' => 'The allowed maximum number of fields is {0}.', 'allowed_minimum_number_of_fields' => 'The allowed minimum number of fields is {0}.', 'add' => 'Add', 'remove' => 'Remove', 'allowed_maximum_number_of_sections' => 'The allowed maximum number of sections is {0}', 'allowed_minimum_number_of_sections' => 'The allowed minimum number of sections is {0}', 'add_section' => 'Add Section', 'remove_section' => 'Remove Section', 'toggle_all' => 'Toggle All', 'toggle_all_collapsible_sections' => 'Toggle all collapsible sections', 'reset' => 'Reset', 'yes' => 'Yes', 'no' => 'No', 'on' => 'On', 'off' => 'Off', 'enabled' => 'Enabled', 'disabled' => 'Disabled', 'supported' => 'Supported', 'not_supported' => 'Not Supported', 'functional' => 'Functional', 'not_functional' => 'Not Functional', 'too_long' => 'Too Long', 'acceptable' => 'Acceptable', 'no_log_found' => 'No log found.', 'method_called_too_early' => 'The method is called too early.', 'debug_info' => 'Debug Info', 'click_to_expand' => 'Click here to expand to view the contents.', 'click_to_collapse' => 'Click here to collapse the contents.', 'loading' => 'Loading...', 'please_enable_javascript' => 'Please enable JavaScript for better experience.');
    protected $_sTextDomain = 'server-information';
    static private $_aInstancesByTextDomain = array();
    public static function getInstance($sTextDomain = 'server-information') {
        $_oInstance = isset(self::$_aInstancesByTextDomain[$sTextDomain]) && (self::$_aInstancesByTextDomain[$sTextDomain] instanceof ServerInformation_AdminPageFramework_Message) ? self::$_aInstancesByTextDomain[$sTextDomain] : new ServerInformation_AdminPageFramework_Message($sTextDomain);
        self::$_aInstancesByTextDomain[$sTextDomain] = $_oInstance;
        return self::$_aInstancesByTextDomain[$sTextDomain];
    }
    public static function instantiate($sTextDomain = 'server-information') {
        return self::getInstance($sTextDomain);
    }
    public function __construct($sTextDomain = 'server-information') {
        $this->_sTextDomain = $sTextDomain;
        $this->aMessages = array_fill_keys(array_keys($this->aDefaults), null);
    }
    public function getTextDomain() {
        return $this->_sTextDomain;
    }
    public function set($sKey, $sValue) {
        $this->aMessages[$sKey] = $sValue;
    }
    public function get($sKey = '') {
        if (!$sKey) {
            return $this->_getAllMessages();
        }
        return isset($this->aMessages[$sKey]) ? __($this->aMessages[$sKey], $this->_sTextDomain) : __($this->{$sKey}, $this->_sTextDomain);
    }
    private function _getAllMessages() {
        $_aMessages = array();
        foreach ($this->aMessages as $_sLabel => $_sTranslation) {
            $_aMessages[$_sLabel] = $this->get($_sLabel);
        }
        return $_aMessages;
    }
    public function output($sKey) {
        echo $this->get($sKey);
    }
    public function __($sKey) {
        return $this->get($sKey);
    }
    public function _e($sKey) {
        $this->output($sKey);
    }
    public function __get($sPropertyName) {
        return isset($this->aDefaults[$sPropertyName]) ? $this->aDefaults[$sPropertyName] : $sPropertyName;
    }
    private function __doDummy() {
        __('The options have been updated.', 'server-information');
        __('The options have been cleared.', 'server-information');
        __('Export', 'server-information');
        __('Export Options', 'server-information');
        __('Import', 'server-information');
        __('Import Options', 'server-information');
        __('Submit', 'server-information');
        __('An error occurred while uploading the import file.', 'server-information');
        __('The uploaded file type is not supported: %1$s', 'server-information');
        __('Could not load the importing data.', 'server-information');
        __('The uploaded file has been imported.', 'server-information');
        __('No data could be imported.', 'server-information');
        __('Upload Image', 'server-information');
        __('Use This Image', 'server-information');
        __('Insert from URL', 'server-information');
        __('Are you sure you want to reset the options?', 'server-information');
        __('Please confirm your action.', 'server-information');
        __('The specified options have been deleted.', 'server-information');
        __('A problem occurred while processing the form data. Please try again.', 'server-information');
        __('Not all form fields could not be sent. Please check your server settings of PHP <code>max_input_vars</code> and consult the server administrator to increase the value. <code>max input vars</code>: %1$s. <code>$_POST</code> count: %2$s', 'server-information');
        __('Is it okay to send the email?', 'server-information');
        __('The email has been sent.', 'server-information');
        __('The email has been scheduled.', 'server-information');
        __('There was a problem sending the email', 'server-information');
        __('Title', 'server-information');
        __('Author', 'server-information');
        __('Categories', 'server-information');
        __('Tags', 'server-information');
        __('Comments', 'server-information');
        __('Date', 'server-information');
        __('Show All', 'server-information');
        __('Show All Authors', 'server-information');
        __('Thank you for creating with', 'server-information');
        __('and', 'server-information');
        __('Settings', 'server-information');
        __('Manage', 'server-information');
        __('Select Image', 'server-information');
        __('Upload File', 'server-information');
        __('Use This File', 'server-information');
        __('Select File', 'server-information');
        __('Remove Value', 'server-information');
        __('Select All', 'server-information');
        __('Select None', 'server-information');
        __('No term found.', 'server-information');
        __('Select', 'server-information');
        __('Insert', 'server-information');
        __('Use This', 'server-information');
        __('Return to Library', 'server-information');
        __('%1$s queries in %2$s seconds.', 'server-information');
        __('%1$s out of %2$s MB (%3$s) memory used.', 'server-information');
        __('Peak memory usage %1$s MB.', 'server-information');
        __('Initial memory usage  %1$s MB.', 'server-information');
        __('The allowed maximum number of fields is {0}.', 'server-information');
        __('The allowed minimum number of fields is {0}.', 'server-information');
        __('Add', 'server-information');
        __('Remove', 'server-information');
        __('The allowed maximum number of sections is {0}', 'server-information');
        __('The allowed minimum number of sections is {0}', 'server-information');
        __('Add Section', 'server-information');
        __('Remove Section', 'server-information');
        __('Toggle All', 'server-information');
        __('Toggle all collapsible sections', 'server-information');
        __('Reset', 'server-information');
        __('Yes', 'server-information');
        __('No', 'server-information');
        __('On', 'server-information');
        __('Off', 'server-information');
        __('Enabled', 'server-information');
        __('Disabled', 'server-information');
        __('Supported', 'server-information');
        __('Not Supported', 'server-information');
        __('Functional', 'server-information');
        __('Not Functional', 'server-information');
        __('Too Long', 'server-information');
        __('Acceptable', 'server-information');
        __('No log found.', 'server-information');
        __('The method is called too early: %1$s', 'server-information');
        __('Debug Info', 'server-information');
        __('Click here to expand to view the contents.', 'server-information');
        __('Click here to collapse the contents.', 'server-information');
        __('Loading...', 'server-information');
        __('Please enable JavaScript for better experience.', 'server-information');
    }
}