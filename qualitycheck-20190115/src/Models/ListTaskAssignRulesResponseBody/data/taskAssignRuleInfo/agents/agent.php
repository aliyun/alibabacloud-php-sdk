<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\agents;

use AlibabaCloud\Dara\Model;

class agent extends Model
{
    /**
     * @var string
     */
    public $agentId;
    /**
     * @var string
     */
    public $agentName;
    protected $_name = [
        'agentId'   => 'AgentId',
        'agentName' => 'AgentName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
