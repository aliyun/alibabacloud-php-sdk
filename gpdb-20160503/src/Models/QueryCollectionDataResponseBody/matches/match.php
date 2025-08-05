<?php

// This file is auto-generated, don't edit it. Thanks.
 
namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches;
use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\values;
class match extends Model {
  /**
   * @var string
   */
  public $id;
  /**
   * @var string[]
   */
  public $metadata;
  /**
   * @var float
   */
  public $score;
  /**
   * @var values
   */
  public $values;
  protected $_name = [
      'id' => 'Id',
      'metadata' => 'Metadata',
      'score' => 'Score',
      'values' => 'Values',
  ];

  public function validate()
  {
    if(is_array($this->metadata)) {
      Model::validateArray($this->metadata);
    }
    if(null !== $this->values) {
      $this->values->validate();
    }
    parent::validate();
  }

  public function toArray($noStream = false)
  {
    $res = [];
    if (null !== $this->id) {
      $res['Id'] = $this->id;
    }

    if (null !== $this->metadata) {
      if(is_array($this->metadata)) {
        $res['Metadata'] = [];
        foreach($this->metadata as $key1 => $value1) {
          $res['Metadata'][$key1] = $value1;
        }
      }
    }

    if (null !== $this->score) {
      $res['Score'] = $this->score;
    }

    if (null !== $this->values) {
      $res['Values'] = null !== $this->values ? $this->values->toArray($noStream) : $this->values;
    }

    return $res;
  }

  public function toMap($noStream = false)
  {
    return $this->toArray($noStream);
  }

  public static function fromMap($map = [])
  {
    $model = new self();
    if (isset($map['Id'])) {
      $model->id = $map['Id'];
    }

    if (isset($map['Metadata'])) {
      if(!empty($map['Metadata'])) {
        $model->metadata = [];
        foreach($map['Metadata'] as $key1 => $value1) {
          $model->metadata[$key1] = $value1;
        }
      }
    }

    if (isset($map['Score'])) {
      $model->score = $map['Score'];
    }

    if (isset($map['Values'])) {
      $model->values = values::fromMap($map['Values']);
    }

    return $model;
  }


}

