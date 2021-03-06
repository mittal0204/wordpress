<?php
/**
 Admin Page Framework v3.7.6b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/server-information>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class ServerInformation_AdminPageFramework_Form_View___CSS_CollapsibleSectionIE extends ServerInformation_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getCollapsibleSectionsRules();
    }
    private function _getCollapsibleSectionsRules() {
        return <<<CSSRULES
/* Collapsible sections - in IE tbody and tr cannot set paddings */        
tbody.server-information-collapsible-content > tr > th,
tbody.server-information-collapsible-content > tr > td
{
    padding-right: 20px;
    padding-left: 20px;
}

CSSRULES;
        
    }
}