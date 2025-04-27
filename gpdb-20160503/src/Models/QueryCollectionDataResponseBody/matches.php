<?php

// This file is auto-generated, don't edit it. Thanks.
 
namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody;
use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match;
class matches extends Model {
  /**
   * @var match[]
   */
  public $match;
  protected $_name = [
      'match' => 'match',
  ];

  public function validate()
  {
    if(is_array($this->match)) {
      Model::validateArray($this->match);
    }
    parent::validate();
  }

  public function toArray($noStream = false)
  {
    $res = [];
    if (null !== $this->match) {
      if(is_array($this->match)) {
        $res['match'] = [];
        $n1 = 0;
        foreach($this->match as $item1) {
          $res['match'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
        }
      }
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
    if (isset($map['match'])) {
      if(!empty($map['match'])) {
        $model->match = [];
        $n1 = 0;
        foreach($map['match'] as $item1) {
          $model->match[$n1++] = match::fromMap($item1);
        }
      }
    }

    return $model;
  }


}

