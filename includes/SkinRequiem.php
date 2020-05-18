<?php
/**
 * SkinTemplate class for the Requiem skin.
 * 
 * @file
 * @ingroup Skins
 */

 class SkinRequiem extends SkinTemplate {

  var $skinname = 'requiem';
  var $stylename = 'Requiem';
  var $template = 'RequiemTemplate';
  var $useHeadElement = true;
  
  /**
   * This function adds JavaScript to the skin, via ResourceLoader.
   * 
   * @param OutputPage $out
   */
  public function initPage(OutputPage $out) {
    parent::initPage($out);
    $out->addModules('skins.requiem.js');
  }

  /**
   * Add CSS to the skin, via ResourceLoader.
   * 
   * @param OutputPage $out
   */
  function setupSkinUserCss(OutputPage $out) {
    parent::setupSkinUserCss($out);
    $out->addModuleStyles(array('mediawiki.skinning.interface', 'skins.requiem.less'));
  }
 }
