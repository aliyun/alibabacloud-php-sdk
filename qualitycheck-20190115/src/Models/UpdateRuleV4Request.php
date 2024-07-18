<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class UpdateRuleV4Request extends Model
{
    /**
     * @description baseMeAgentId
     *
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $jsonStrForRule;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'baseMeAgentId'  => 'BaseMeAgentId',
        'jsonStrForRule' => 'JsonStrForRule',
        'ruleId'         => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }
        if (null !== $this->jsonStrForRule) {
            $res['JsonStrForRule'] = $this->jsonStrForRule;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRuleV4Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }
        if (isset($map['JsonStrForRule'])) {
            $model->jsonStrForRule = $map['JsonStrForRule'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
