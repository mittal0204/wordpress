<?php
/**
 Admin Page Framework v3.7.6b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/server-information>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class ServerInformation_AdminPageFramework_Form___FieldError extends ServerInformation_AdminPageFramework_FrameworkUtility {
    static private $_aErrors = array();
    public $sCallerID;
    public function __construct($sCallerID) {
        $this->sCallerID = $sCallerID;
    }
    public function hasError() {
        return isset(self::$_aErrors[md5($this->sCallerID) ]);
    }
    public function set($aErrors) {
        if (empty(self::$_aErrors)) {
            add_action('shutdown', array($this, '_replyToSaveFieldErrors'));
        }
        $_sID = md5($this->sCallerID);
        self::$_aErrors[$_sID] = isset(self::$_aErrors[$_sID]) ? $this->uniteArrays(self::$_aErrors[$_sID], $aErrors) : $aErrors;
    }
    public function _replyToSaveFieldErrors() {
        if (!isset(self::$_aErrors)) {
            return;
        }
        $this->setTransient("apf_field_erros_" . get_current_user_id(), self::$_aErrors, 300);
    }
    public function get() {
        static $_aFieldErrors;
        $_sTransientKey = "apf_field_erros_" . get_current_user_id();
        $_sID = md5($this->sCallerID);
        $_aFieldErrors = isset($_aFieldErrors) ? $_aFieldErrors : $this->getTransient($_sTransientKey);
        return $this->getElementAsArray($_aFieldErrors, $_sID, array());
    }
    public function delete() {
        add_action('shutdown', array($this, '_replyToDeleteFieldErrors'));
    }
    public function _replyToDeleteFieldErrors() {
        $this->deleteTransient("apf_field_erros_" . get_current_user_id());
    }
}