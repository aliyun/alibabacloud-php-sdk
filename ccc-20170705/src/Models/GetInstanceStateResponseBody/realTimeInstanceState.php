<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody\realTimeInstanceState\agentStateDistributions;
use AlibabaCloud\Tea\Model;

class realTimeInstanceState extends Model
{
    /**
     * @var agentStateDistributions
     */
    public $agentStateDistributions;
    protected $_name = [
        'agentStateDistributions' => 'AgentStateDistributions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentStateDistributions) {
            $res['AgentStateDistributions'] = null !== $this->agentStateDistributions ? $this->agentStateDistributions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTimeInstanceState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentStateDistributions'])) {
            $model->agentStateDistributions = agentStateDistributions::fromMap($map['AgentStateDistributions']);
        }

        return $model;
    }
}
