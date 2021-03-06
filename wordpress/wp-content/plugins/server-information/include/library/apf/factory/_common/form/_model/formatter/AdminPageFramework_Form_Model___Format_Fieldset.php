<?php
/**
 Admin Page Framework v3.7.6b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/server-information>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class ServerInformation_AdminPageFramework_Form_Model___Format_Fieldset extends ServerInformation_AdminPageFramework_Form_Model___Format_FormField_Base {
    static public $aStructure = array('field_id' => null, 'type' => null, 'section_id' => null, 'section_title' => null, 'page_slug' => null, 'tab_slug' => null, 'option_key' => null, 'class_name' => null, 'capability' => null, 'title' => null, 'tip' => null, 'description' => null, 'error_message' => null, 'before_label' => null, 'after_label' => null, 'if' => true, 'order' => null, 'default' => null, 'value' => null, 'help' => null, 'help_aside' => null, 'repeatable' => null, 'sortable' => null, 'show_title_column' => true, 'hidden' => null, 'attributes' => null, 'class' => array('fieldrow' => array(), 'fieldset' => array(), 'fields' => array(), 'field' => array(),), 'save' => true, 'content' => null, '_fields_type' => null, '_structure_type' => null, '_caller_object' => null, '_section_path' => '', '_section_path_array' => '', '_nested_depth' => 0, '_subsection_index' => null, '_field_path' => '', '_field_path_array' => '',);
    public $aFieldset = array();
    public $sStructureType = '';
    public $sCapability = 'manage_options';
    public $iCountOfElements = 0;
    public $iSubSectionIndex = null;
    public $bIsSectionRepeatable = false;
    public $oCallerObject;
    public function __construct() {
        $_aParameters = func_get_args() + array($this->aFieldset, $this->sStructureType, $this->sCapability, $this->iCountOfElements, $this->iSubSectionIndex, $this->bIsSectionRepeatable, $this->oCallerObject);
        $this->aFieldset = $_aParameters[0];
        $this->sStructureType = $_aParameters[1];
        $this->sCapability = $_aParameters[2];
        $this->iCountOfElements = $_aParameters[3];
        $this->iSubSectionIndex = $_aParameters[4];
        $this->bIsSectionRepeatable = $_aParameters[5];
        $this->oCallerObject = $_aParameters[6];
    }
    public function get() {
        $_aFieldset = $this->uniteArrays(array('_fields_type' => $this->sStructureType, '_structure_type' => $this->sStructureType, '_caller_object' => $this->oCallerObject, '_subsection_index' => $this->iSubSectionIndex,) + $this->aFieldset, array('capability' => $this->sCapability, 'section_id' => '_default', '_section_repeatable' => $this->bIsSectionRepeatable,) + self::$aStructure);
        $_aFieldset['field_id'] = $this->getIDSanitized($_aFieldset['field_id']);
        $_aFieldset['section_id'] = $this->getIDSanitized($_aFieldset['section_id']);
        $_aFieldset['_section_path'] = $this->getFormElementPath($_aFieldset['section_id']);
        $_aFieldset['_section_path_array'] = explode('|', $_aFieldset['_section_path']);
        $_aFieldset['_field_path'] = $this->getFormElementPath($_aFieldset['field_id']);
        $_aFieldset['_field_path_array'] = explode('|', $_aFieldset['_field_path']);
        $_aFieldset['_nested_depth'] = count($_aFieldset['_field_path_array']) - 1;
        $_aFieldset['order'] = $this->getAOrB(is_numeric($_aFieldset['order']), $_aFieldset['order'], $this->iCountOfElements + 10);
        $_aFieldset['class'] = $this->getAsArray($_aFieldset['class']);
        return $_aFieldset;
    }
}