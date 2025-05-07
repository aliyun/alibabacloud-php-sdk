<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class UpdateRuleV4Request extends Model
{
    /**
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @var string
     */
    public $jsonStrForRule;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'jsonStrForRule' => 'JsonStrForRule',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
