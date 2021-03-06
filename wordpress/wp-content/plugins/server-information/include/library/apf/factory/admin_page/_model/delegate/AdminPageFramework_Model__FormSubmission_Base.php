<?php
/**
 Admin Page Framework v3.7.6b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/server-information>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
abstract class ServerInformation_AdminPageFramework_Model__FormSubmission_Base extends ServerInformation_AdminPageFramework_FrameworkUtility {
    protected function _getPressedSubmitButtonData(array $aPostElements, $sTargetKey = 'field_id') {
        foreach ($aPostElements as $_sInputID => $_aSubElements) {
            if (!isset($_aSubElements['name'])) {
                continue;
            }
            $_aNameKeys = explode('|', $_aSubElements['name']);
            if (null === $this->getElement($_POST, $_aNameKeys, null)) {
                continue;
            }
            return $this->getElement($_aSubElements, $sTargetKey, null);
        }
        return null;
    }
    protected function _setSettingNoticeAfterValidation($bIsInputEmtpy) {
        if ($this->oFactory->hasSettingNotice()) {
            return;
        }
        $this->oFactory->setSettingNotice($this->getAOrB($bIsInputEmtpy, $this->oFactory->oMsg->get('option_cleared'), $this->oFactory->oMsg->get('option_updated')), $this->getAOrB($bIsInputEmtpy, 'error', 'updated'), $this->oFactory->oProp->sOptionKey, false);
    }
}