<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateInterceptionRuleShrinkRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * This parameter is required.
     * @example c35xxxa416
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the cluster.
     *
     * This parameter is required.
     * @example sas-test-cnnf
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The information about the destination network object. The value of this parameter contains the following fields:
     *
     *   targetId: the ID of the destination network object. You can call the [ListInterceptionTargetPage](~~ListInterceptionTargetPage~~) operation to query the ID.
     *   ports: the destination port ranges.
     *
     * @example [
     * ]
     * @var string
     */
    public $dstTargetListShrink;

    /**
     * @description The action on traffic. Valid values:
     *
     *   **1**: blocks traffic.
     *   **2**: allows traffic and generates alerts.
     *   **3**: allows traffic and does not generate alerts.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $interceptType;

    /**
     * @description The priority of the defense rule. Valid values: 1 to 1000. A smaller value indicates a higher priority.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $orderIndex;

    /**
     * @description The name of the defense rule.
     *
     * This parameter is required.
     * @example test-rule-1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Specifies the status of the defense rule. Valid values:
     *
     *   **0**: disables the rule.
     *   **1**: enables the rule.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @description The type of the defense rule. Valid values:
     *
     *   customize: custom rule
     *
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The source network object. The value of this parameter contains the following field:
     *
     *   targetId: the ID of the source network object. You can call the [ListInterceptionTargetPage](~~ListInterceptionTargetPage~~) operation to query the ID.
     *
     * @example {"targetId":301940}
     *
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
