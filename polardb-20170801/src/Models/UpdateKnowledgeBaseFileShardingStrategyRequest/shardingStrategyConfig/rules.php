<?php

// This file is auto-generated, don't edit it. Thanks.
 
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest\shardingStrategyConfig;
use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest\shardingStrategyConfig\rules\match;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest\shardingStrategyConfig\rules\strategy;
class rules extends Model {
  /**
   * @var match
   */
  public $match;
  /**
   * @var strategy
   */
  public $strategy;
  protected $_name = [
      'match' => 'Match',
      'strategy' => 'Strategy',
  ];

  public function validate()
  {
    if(null !== $this->match) {
      $this->match->validate();
    }
    if(null !== $this->strategy) {
      $this->strategy->validate();
    }
    parent::validate();
  }

  public function toArray($noStream = false)
  {
    $res = [];
    if (null !== $this->match) {
      $res['Match'] = null !== $this->match ? $this->match->toArray($noStream) : $this->match;
    }

    if (null !== $this->strategy) {
      $res['Strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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
    if (isset($map['Match'])) {
      $model->match = match::fromMap($map['Match']);
    }

    if (isset($map['Strategy'])) {
      $model->strategy = strategy::fromMap($map['Strategy']);
    }

    return $model;
  }


}

