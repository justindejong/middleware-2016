<?php 
/**
	Admin Page Framework v3.8.13 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/presscode>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class Pcode_AdminPageFramework_Form_View___CSS_Section extends Pcode_AdminPageFramework_Form_View___CSS_Base {
    protected function _get() {
        return $this->_getFormSectionRules();
    }
    private function _getFormSectionRules() {
        $_sCSSRules = ".presscode-section .form-table {margin-top: 0;}.presscode-section .form-table td label { display: inline;}.presscode-section-tabs-contents {margin-top: 1em;}.presscode-section-tabs { margin: 0;}.presscode-tab-content { padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd; }.presscode-section-tab {background-color: transparent;vertical-align: bottom; margin-bottom: -2px;margin-left: 0px;margin-right: 0.5em;background-color: #F1F1F1;font-weight: normal;}.presscode-section-tab:hover {background-color: #F8F8F8;}.presscode-section-tab.active {background-color: #fdfdfd; }.presscode-section-tab h4 {margin: 0;padding: 0.4em 0.8em;font-size: 1.12em;vertical-align: middle;white-space: nowrap;display:inline-block;font-weight: normal;}.presscode-section-tab.nav-tab {padding: 0.2em 0.4em;}.presscode-section-tab.nav-tab a {text-decoration: none;color: #464646;vertical-align: inherit; outline: 0; }.presscode-section-tab.nav-tab a:focus { box-shadow: none;}.presscode-section-tab.nav-tab.active a {color: #000;}.presscode-content ul.presscode-section-tabs > li.presscode-section-tab {list-style-type: none;margin: -4px 4px -1px 0;}.presscode-repeatable-section-buttons {float: right;clear: right;margin-top: 1em;}.presscode-repeatable-section-buttons.disabled > .repeatable-section-button {color: #edd;border-color: #edd;}.presscode-section-caption {text-align: left;margin: 0;}.presscode-section .presscode-section-title {}.presscode-sections.sortable-section > .presscode-section {padding: 1em 1.8em 1em 2.6em;}.presscode-sections.sortable-section > .presscode-section.is_subsection_collapsible {display: block; float: none;border: 0px;padding: 0;background: transparent;}.presscode-sections.sortable-section > .presscode-tab-content {display: block; float: none;border: 0px;padding: 0.5em 2em 1.5em 2em;margin: 0;border-style: solid;border-width: 1px;border-color: #dfdfdf;background-color: #fdfdfd;}.presscode-sections.sortable-section > .presscode-section {margin-bottom: 1em;}.presscode-section {margin-bottom: 1em; }.presscode-sectionset {margin-bottom: 1em; display:inline-block;width:100%;}.presscode-section > .presscode-sectionset {margin-left: 2em;}";
        $_sCSSRules.= $this->___getForWP47();
        return $_sCSSRules;
    }
    private function ___getForWP47() {
        if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
            return '';
        }
        return ".presscode-content ul.presscode-section-tabs > li.presscode-section-tab {margin-bottom: -2px;}";
    }
}
