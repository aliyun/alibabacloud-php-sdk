<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody\realTimeInstanceState\agentStateDistributions;

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
        if (null !== $this->agentStateDistributions) {
            $this->agentStateDistributions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStateDistributions) {
            $res['AgentStateDistributions'] = null !== $this->agentStateDistributions ? $this->agentStateDistributions->toArray($noStream) : $this->agentStateDistributions;
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
        if (isset($map['AgentStateDistributions'])) {
            $model->agentStateDistributions = agentStateDistributions::fromMap($map['AgentStateDistributions']);
        }

        return $model;
    }
}
