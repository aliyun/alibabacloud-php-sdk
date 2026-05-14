<?php

// This file is auto-generated, don't edit it. Thanks.
 
namespace AlibabaCloud\SDK\APIG\V20240327\Models;
use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketDomain;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute\match;
class HiMarketHttpRoute extends Model {
  /**
   * @var boolean
   */
  public $builtin;
  /**
   * @var string
   */
  public $description;
  /**
   * @var HiMarketDomain[]
   */
  public $domains;
  /**
   * @var match
   */
  public $match;
  protected $_name = [
      'builtin' => 'builtin',
      'description' => 'description',
      'domains' => 'domains',
      'match' => 'match',
  ];

  public function validate()
  {
    if(is_array($this->domains)) {
      Model::validateArray($this->domains);
    }
    if(null !== $this->match) {
      $this->match->validate();
    }
    parent::validate();
  }

  public function toArray($noStream = false)
  {
    $res = [];
    if (null !== $this->builtin) {
      $res['builtin'] = $this->builtin;
    }

    if (null !== $this->description) {
      $res['description'] = $this->description;
    }

    if (null !== $this->domains) {
      if(is_array($this->domains)) {
        $res['domains'] = [];
        $n1 = 0;
        foreach($this->domains as $item1) {
          $res['domains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
          $n1++;
        }
      }
    }

    if (null !== $this->match) {
      $res['match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
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
    if (isset($map['builtin'])) {
      $model->builtin = $map['builtin'];
    }

    if (isset($map['description'])) {
      $model->description = $map['description'];
    }

    if (isset($map['domains'])) {
      if(!empty($map['domains'])) {
        $model->domains = [];
        $n1 = 0;
        foreach($map['domains'] as $item1) {
          $model->domains[$n1] = HiMarketDomain::fromMap($item1);
          $n1++;
        }
      }
    }

    if (isset($map['match'])) {
      $model->match = match::fromMap($map['match']);
    }

    return $model;
  }


}

