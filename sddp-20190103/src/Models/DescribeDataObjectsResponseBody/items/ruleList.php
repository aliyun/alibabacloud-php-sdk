<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataObjectsResponseBody\items;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;

    /**
     * @example S1
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @example 590
     *
     * @var int
     */
    public $ruleCount;

    /**
     * @example 1080
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example name
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'riskLevelId'   => 'RiskLevelId',
        'riskLevelName' => 'RiskLevelName',
        'ruleCount'     => 'RuleCount',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ruleList
     */
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
