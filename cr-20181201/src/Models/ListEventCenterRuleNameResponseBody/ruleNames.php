<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListEventCenterRuleNameResponseBody;

use AlibabaCloud\Tea\Model;

class ruleNames extends Model
{
    /**
     * @description The ID of the event notification rule.
     *
     * @example crecr-n6pbhgjxtl*****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the event notification rule.
     *
     * @example test-chain
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'ruleId'   => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
