<?php

interface PhabricatorConduitResultInterface
  extends PhabricatorPHIDInterface {

  public function getFieldSpecificationsForConduit();
  public function getFieldValuesForConduit();

}

// TEMPLATE IMPLEMENTATION /////////////////////////////////////////////////////

/* -(  PhabricatorConduitResultInterface  )---------------------------------- */
/*

  public function getFieldSpecificationsForConduit() {
    return array(
      'name' => array(
        'type' => 'string',
        'description' => pht('The name of the object.'),
      ),
    );
  }

  public function getFieldValuesForConduit() {
    return array(
      'name' => $this->getName(),
    );
  }

*/
