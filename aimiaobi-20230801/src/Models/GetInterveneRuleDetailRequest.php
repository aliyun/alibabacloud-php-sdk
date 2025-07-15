<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GetInterveneRuleDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2daaa2e0c209xb26acb97009ea77bd4b_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 12345
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'ruleId' => 'RuleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInterveneRuleDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
