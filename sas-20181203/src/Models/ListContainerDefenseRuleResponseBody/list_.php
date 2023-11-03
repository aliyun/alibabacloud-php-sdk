<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListContainerDefenseRuleResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The total number of clusters.
     *
     * @example 1
     *
     * @var int
     */
    public $clusterCount;

    /**
     * @description The clusters specified in the rule.
     *
     * @example cfb41a8**8a106
     *
     * @var string
     */
    public $clusterIdList;

    /**
     * @description The description of the rule.
     *
     * @example defense rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The action specified in the rule. Valid values:
     *
     *   **1**: alert
     *   **2**: block
     *
     * @example 1
     *
     * @var int
     */
    public $ruleAction;

    /**
     * @description The ID of the rule.
     *
     * @example 181
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example test-rule-01
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 0
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **1**: system rule
     *   **2**: custom rule
     *
     * @example 1
     *
     * @var int
     */
    public $ruleType;
    protected $_name = [
        'clusterCount'  => 'ClusterCount',
        'clusterIdList' => 'ClusterIdList',
        'description'   => 'Description',
        'ruleAction'    => 'RuleAction',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
        'ruleSwitch'    => 'RuleSwitch',
        'ruleType'      => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterCount) {
            $res['ClusterCount'] = $this->clusterCount;
        }
        if (null !== $this->clusterIdList) {
            $res['ClusterIdList'] = $this->clusterIdList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterCount'])) {
            $model->clusterCount = $map['ClusterCount'];
        }
        if (isset($map['ClusterIdList'])) {
            $model->clusterIdList = $map['ClusterIdList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
