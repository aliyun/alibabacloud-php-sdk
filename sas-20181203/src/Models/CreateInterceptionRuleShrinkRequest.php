<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateInterceptionRuleShrinkRequest extends Model
{
    /**
     * @example c35xxxa416
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example sas-test-cnnf
     *
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $dstTargetListShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $interceptType;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderIndex;

    /**
     * @example test-rule-1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $srcTargetShrink;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'clusterName'         => 'ClusterName',
        'dstTargetListShrink' => 'DstTargetList',
        'interceptType'       => 'InterceptType',
        'orderIndex'          => 'OrderIndex',
        'ruleName'            => 'RuleName',
        'ruleSwitch'          => 'RuleSwitch',
        'ruleType'            => 'RuleType',
        'srcTargetShrink'     => 'SrcTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->dstTargetListShrink) {
            $res['DstTargetList'] = $this->dstTargetListShrink;
        }
        if (null !== $this->interceptType) {
            $res['InterceptType'] = $this->interceptType;
        }
        if (null !== $this->orderIndex) {
            $res['OrderIndex'] = $this->orderIndex;
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
        if (null !== $this->srcTargetShrink) {
            $res['SrcTarget'] = $this->srcTargetShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInterceptionRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DstTargetList'])) {
            $model->dstTargetListShrink = $map['DstTargetList'];
        }
        if (isset($map['InterceptType'])) {
            $model->interceptType = $map['InterceptType'];
        }
        if (isset($map['OrderIndex'])) {
            $model->orderIndex = $map['OrderIndex'];
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
        if (isset($map['SrcTarget'])) {
            $model->srcTargetShrink = $map['SrcTarget'];
        }

        return $model;
    }
}
