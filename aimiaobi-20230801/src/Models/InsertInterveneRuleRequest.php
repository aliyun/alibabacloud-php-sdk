<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig;

class InsertInterveneRuleRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var interveneRuleConfig
     */
    public $interveneRuleConfig;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'interveneRuleConfig' => 'InterveneRuleConfig',
    ];

    public function validate()
    {
        if (null !== $this->interveneRuleConfig) {
            $this->interveneRuleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->interveneRuleConfig) {
            $res['InterveneRuleConfig'] = null !== $this->interveneRuleConfig ? $this->interveneRuleConfig->toArray($noStream) : $this->interveneRuleConfig;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['InterveneRuleConfig'])) {
            $model->interveneRuleConfig = interveneRuleConfig::fromMap($map['InterveneRuleConfig']);
        }

        return $model;
    }
}
