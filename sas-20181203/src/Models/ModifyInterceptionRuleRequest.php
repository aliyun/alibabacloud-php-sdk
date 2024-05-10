<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyInterceptionRuleRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * > You can call the [DescribeGroupedContainerInstances](https://help.aliyun.com/document_detail/182997.html) operation to query the IDs of container clusters.
     * @example c17ef568f81884cdab402decd5fcd****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The destination objects of the rule. The following parameters are included:
     *
     *   targetId: the ID of the destination object. You can call the [ListInterceptionTargetPage](~~ListInterceptionTargetPage~~) operation to query the ID.
     *   ports: the destination port ranges.
     *
     * @example {"targetId":600069,"ports":["80/8088"]}
     *
     * @var mixed[]
     */
    public $dstTarget;

    /**
     * @description The interception mode. Valid values:
     *
     *   **1**: block
     *   **2**: alert
     *   **3**: allow
     *
     * @example 1
     *
     * @var int
     */
    public $interceptType;

    /**
     * @description The priority of the rule. Valid values: 1 to 1000. A smaller value indicates a higher priority.
     *
     * @example 1
     *
     * @var int
     */
    public $orderIndex;

    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example 500018
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the rule.
     *
     * @example tetsRule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Specifies whether the rule is enabled. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $ruleSwitch;

    /**
     * @description The source object of the rule. The following parameters are included:
     *
     *   targetId: the ID of the source object. You can call the [ListInterceptionTargetPage](~~ListInterceptionTargetPage~~) operation to query the ID.
     *
     * @example {"targetId":400989}
     *
     * @var mixed[]
     */
    public $srcTarget;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'dstTarget'     => 'DstTarget',
        'interceptType' => 'InterceptType',
        'orderIndex'    => 'OrderIndex',
        'ruleId'        => 'RuleId',
        'ruleName'      => 'RuleName',
        'ruleSwitch'    => 'RuleSwitch',
        'srcTarget'     => 'SrcTarget',
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
        if (null !== $this->dstTarget) {
            $res['DstTarget'] = $this->dstTarget;
        }
        if (null !== $this->interceptType) {
            $res['InterceptType'] = $this->interceptType;
        }
        if (null !== $this->orderIndex) {
            $res['OrderIndex'] = $this->orderIndex;
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
        if (null !== $this->srcTarget) {
            $res['SrcTarget'] = $this->srcTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInterceptionRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DstTarget'])) {
            $model->dstTarget = $map['DstTarget'];
        }
        if (isset($map['InterceptType'])) {
            $model->interceptType = $map['InterceptType'];
        }
        if (isset($map['OrderIndex'])) {
            $model->orderIndex = $map['OrderIndex'];
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
        if (isset($map['SrcTarget'])) {
            $model->srcTarget = $map['SrcTarget'];
        }

        return $model;
    }
}
