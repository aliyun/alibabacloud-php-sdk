<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody\items;

use AlibabaCloud\Dara\Model;

class ruleList extends Model
{
    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var int
     */
    public $ruleCount;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'riskLevelId' => 'RiskLevelId',
        'riskLevelName' => 'RiskLevelName',
        'ruleCount' => 'RuleCount',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }

        if (null !== $this->ruleCount) {
            $res['RuleCount'] = $this->ruleCount;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }

        if (isset($map['RuleCount'])) {
            $model->ruleCount = $map['RuleCount'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
