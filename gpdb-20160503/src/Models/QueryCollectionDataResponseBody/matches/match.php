<?php

// This file is auto-generated, don't edit it. Thanks.
 
namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches;
use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\sparseValues;
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
   * @var mixed[]
   */
  public $metadataV2;
  /**
   * @var float
   */
  public $score;
  /**
   * @var sparseValues
   */
  public $sparseValues;
  /**
   * @var values
   */
  public $values;
  protected $_name = [
      'id' => 'Id',
      'metadata' => 'Metadata',
      'metadataV2' => 'MetadataV2',
      'score' => 'Score',
      'sparseValues' => 'SparseValues',
      'values' => 'Values',
  ];

  public function validate()
  {
    if(is_array($this->metadata)) {
      Model::validateArray($this->metadata);
    }
    if(is_array($this->metadataV2)) {
      Model::validateArray($this->metadataV2);
    }
    if(null !== $this->sparseValues) {
      $this->sparseValues->validate();
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

    if (null !== $this->metadataV2) {
      if(is_array($this->metadataV2)) {
        $res['MetadataV2'] = [];
        foreach($this->metadataV2 as $key1 => $value1) {
          $res['MetadataV2'][$key1] = $value1;
        }
      }
    }

    if (null !== $this->score) {
      $res['Score'] = $this->score;
    }

    if (null !== $this->sparseValues) {
      $res['SparseValues'] = null !== $this->sparseValues ? $this->sparseValues->toArray($noStream) : $this->sparseValues;
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

    if (isset($map['MetadataV2'])) {
      if(!empty($map['MetadataV2'])) {
        $model->metadataV2 = [];
        foreach($map['MetadataV2'] as $key1 => $value1) {
          $model->metadataV2[$key1] = $value1;
        }
      }
    }

    if (isset($map['Score'])) {
      $model->score = $map['Score'];
    }

    if (isset($map['SparseValues'])) {
      $model->sparseValues = sparseValues::fromMap($map['SparseValues']);
    }

    if (isset($map['Values'])) {
      $model->values = values::fromMap($map['Values']);
    }

    return $model;
  }


}

