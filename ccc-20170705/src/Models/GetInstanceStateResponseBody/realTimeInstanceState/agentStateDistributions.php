<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody\realTimeInstanceState;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody\realTimeInstanceState\agentStateDistributions\agentStateCount;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStateCount) {
            $res['AgentStateCount'] = [];
            if (null !== $this->agentStateCount && \is_array($this->agentStateCount)) {
                $n = 0;
                foreach ($this->agentStateCount as $item) {
                    $res['AgentStateCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentStateDistributions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentStateCount'])) {
            if (!empty($map['AgentStateCount'])) {
                $model->agentStateCount = [];
                $n                      = 0;
                foreach ($map['AgentStateCount'] as $item) {
                    $model->agentStateCount[$n++] = null !== $item ? agentStateCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
