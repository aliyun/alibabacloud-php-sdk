<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\samplingMode\samplingModeAgents;

use AlibabaCloud\Tea\Model;

class samplingModeAgent extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $agentId;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $agentName;
    protected $_name = [
        'agentId'   => 'AgentId',
        'agentName' => 'AgentName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return samplingModeAgent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        return $model;
    }
}
