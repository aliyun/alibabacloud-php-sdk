<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest\shardingStrategyConfig\defaultStrategy;
use AlibabaCloud\SDK\Polardb\V20170801\Models\UpdateKnowledgeBaseFileShardingStrategyRequest\shardingStrategyConfig\rules;

class shardingStrategyConfig extends Model
{
    /**
     * @var defaultStrategy
     */
    public $defaultStrategy;

    /**
     * @var rules[]
     */
    public $rules;
    protected $_name = [
        'defaultStrategy' => 'DefaultStrategy',
        'rules' => 'Rules',
    ];

    public function validate()
    {
        if (null !== $this->defaultStrategy) {
            $this->defaultStrategy->validate();
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultStrategy) {
            $res['DefaultStrategy'] = null !== $this->defaultStrategy ? $this->defaultStrategy->toArray($noStream) : $this->defaultStrategy;
        }

        if (null !== $this->rules) {
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DefaultStrategy'])) {
            $model->defaultStrategy = defaultStrategy::fromMap($map['DefaultStrategy']);
        }

        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
