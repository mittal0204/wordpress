<?php
/**
 Admin Page Framework v3.7.6b03 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/server-information>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class ServerInformation_AdminPageFramework_Form_View___CSS_ToolTip extends ServerInformation_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return <<<CSSRULES

/* Inside Field Title */        
th > label > span > .server-information-form-tooltip {
    margin-top: 1px;
    margin-left: 1em;
    
}
/* For admin page fields, put the ? icon to the right hand side */
.server-information-content th > label > span > .server-information-form-tooltip {
    float: right;
}

.postbox-container th > label > span > .server-information-form-tooltip {
    margin-left: 1em;
    float: none;
}
        
/* Regular section titles have + button and collapsible title bar has a triangle icon so give a right margin */
.server-information-section-title > * > a.server-information-form-tooltip,
.server-information-collapsible-title > * > a.server-information-form-tooltip {
    margin-left: 1em;    
}


.server-information-section-tab a.server-information-form-tooltip {
    margin-left: 0.48em;
    color: #BEBEBE;
    vertical-align: middle;
}     
.server-information-section-tab.nav-tab.active a.server-information-form-tooltip {
    color: #BEBEBE;
}

/* Font sizees */


/* Question Mark (?) - we want it to be a little bit smaller than the title */
.server-information-section-title > * > a.server-information-form-tooltip > span,
.server-information-collapsible-title > * > a.server-information-form-tooltip > span {
    margin-top: -4px;
    font-size: inherit;
}
.server-information-form-tooltip > span {
    
    font-size: 1.2em;
    
    /* Dashicon vertical alignment */
    vertical-align: middle;
    
}

/* Tip Contents - When it is placed inside h2, h3, h4, the tooltip text becomes large so avoid that */
.server-information-section-title > * > a.server-information-form-tooltip > span.server-information-form-tooltip-content,
.server-information-collapsible-title > * > a.server-information-form-tooltip > span.server-information-form-tooltip-content,
a.server-information-form-tooltip > .server-information-form-tooltip-content {
    font-size: 13px;
    font-weight: normal;
}


a.server-information-form-tooltip {
    vertical-align: middle;
    outline: none; 
    text-decoration: none;
    cursor: default;
    color: #BEBEBE;
}
a.server-information-form-tooltip > .server-information-form-tooltip-content > .server-information-form-tooltip-title {
    font-weight: bold;
}
a.server-information-form-tooltip strong {
    line-height:30px;
}
a.server-information-form-tooltip:hover {
    text-decoration: none;
} 
a.server-information-form-tooltip > span.server-information-form-tooltip-content {

    display: none; 
    padding: 14px 20px 14px;
    margin-top: -30px; 
    margin-left: 28px;
    width: 320px; 
    line-height:16px;
    
    /* High z-index is required to appear over the left side bar menu */
    z-index: 100000;
    
}
a.server-information-form-tooltip:hover > span.server-information-form-tooltip-content{
    display: inline; 
    position: absolute; 
    color: #111;
    border:1px solid #DCA; 
    background: #FFFFF4;
    
    /* Adjust the position of the tooltip here */
    margin-left: -280px;
    margin-top: -72px;
}

/* Balloon Style */
/* .callout {
    z-index: 200000;
    position: absolute;
    top: 30px;
    border: 0;
    left: -12px;
}
 */

/* Tooltip Box Shadow */
a.server-information-form-tooltip > span.server-information-form-tooltip-content {
    border-radius:4px;
    box-shadow: 5px 5px 8px #CCC;
    -webkit-box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.2);
    box-shadow: 5px 5px 8px rgba(0, 0, 0, 0.2);    
}

CSSRULES;
        
    }
}