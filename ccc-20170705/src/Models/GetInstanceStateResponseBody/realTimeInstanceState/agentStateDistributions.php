<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody\realTimeInstanceState;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody\realTimeInstanceState\agentStateDistributions\agentStateCount;

class agentStateDistributions extends Model
{
    /**
     * @var agentStateCount[]
     */
    public $agentStateCount;
    protected $_name = [
        'agentStateCount' => 'AgentStateCount',
    ];

    public function validate()
    {
        if (\is_array($this->agentStateCount)) {
            Model::validateArray($this->agentStateCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStateCount) {
            if (\is_array($this->agentStateCount)) {
                $res['AgentStateCount'] = [];
                $n1 = 0;
                foreach ($this->agentStateCount as $item1) {
                    $res['AgentStateCount'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AgentStateCount'])) {
            if (!empty($map['AgentStateCount'])) {
                $model->agentStateCount = [];
                $n1 = 0;
                foreach ($map['AgentStateCount'] as $item1) {
                    $model->agentStateCount[$n1] = agentStateCount::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
