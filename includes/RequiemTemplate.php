<?php
/**
 * BaseTemplate class for the Requiem skin.
 * 
 * @file
 * @ingroup Skins
 */
class RequiemTemplate extends BaseTemplate {

  /**
   * Outputs the entire contents of the page/
   */
  public function execute() {
    $parser = new TemplateParser( __DIR__ . '/../templates' );

    $data = [
      'html-head' => $this->html( 'headelement' ),
      'html-tail' => $this->getTrail() . '</body></html>'
    ];
    
    echo $parser->processTemplate( 'index', $data );
  }
}