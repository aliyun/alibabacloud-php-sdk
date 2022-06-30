<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class SwitchSchedulerRuleRequest extends Model
{
    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleType;

    /**
     * @var string
     */
    public $switchData;
    protected $_name = [
        'ruleName'   => 'RuleName',
        'ruleType'   => 'RuleType',
        'switchData' => 'SwitchData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->switchData) {
            $res['SwitchData'] = $this->switchData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchSchedulerRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SwitchData'])) {
            $model->switchData = $map['SwitchData'];
        }

        return $model;
    }
}
