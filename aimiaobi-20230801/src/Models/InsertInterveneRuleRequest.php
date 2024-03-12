<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\InsertInterveneRuleRequest\interveneRuleConfig;
use AlibabaCloud\Tea\Model;

class InsertInterveneRuleRequest extends Model
{
    /**
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var interveneRuleConfig
     */
    public $interveneRuleConfig;
    protected $_name = [
        'agentKey'            => 'AgentKey',
        'interveneRuleConfig' => 'InterveneRuleConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->interveneRuleConfig) {
            $res['InterveneRuleConfig'] = null !== $this->interveneRuleConfig ? $this->interveneRuleConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertInterveneRuleRequest
     */
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
