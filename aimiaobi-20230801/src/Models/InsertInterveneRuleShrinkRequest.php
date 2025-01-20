<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class InsertInterveneRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string
     */
    public $interveneRuleConfigShrink;
    protected $_name = [
        'agentKey'                  => 'AgentKey',
        'interveneRuleConfigShrink' => 'InterveneRuleConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->interveneRuleConfigShrink) {
            $res['InterveneRuleConfig'] = $this->interveneRuleConfigShrink;
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
            $model->interveneRuleConfigShrink = $map['InterveneRuleConfig'];
        }

        return $model;
    }
}
