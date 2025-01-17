<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateInterceptionRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var mixed[]
     */
    public $dstTargetList;
    /**
     * @var int
     */
    public $interceptType;
    /**
     * @var int
     */
    public $orderIndex;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $ruleSwitch;
    /**
     * @var string
     */
    public $ruleType;
    /**
     * @var mixed[]
     */
    public $srcTarget;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'clusterName'   => 'ClusterName',
        'dstTargetList' => 'DstTargetList',
        'interceptType' => 'InterceptType',
        'orderIndex'    => 'OrderIndex',
        'ruleName'      => 'RuleName',
        'ruleSwitch'    => 'RuleSwitch',
        'ruleType'      => 'RuleType',
        'srcTarget'     => 'SrcTarget',
    ];

    public function validate()
    {
        if (\is_array($this->dstTargetList)) {
            Model::validateArray($this->dstTargetList);
        }
        if (\is_array($this->srcTarget)) {
            Model::validateArray($this->srcTarget);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->dstTargetList) {
            if (\is_array($this->dstTargetList)) {
                $res['DstTargetList'] = [];
                foreach ($this->dstTargetList as $key1 => $value1) {
                    $res['DstTargetList'][$key1] = $value1;
                }
            }
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

        if (null !== $this->srcTarget) {
            if (\is_array($this->srcTarget)) {
                $res['SrcTarget'] = [];
                foreach ($this->srcTarget as $key1 => $value1) {
                    $res['SrcTarget'][$key1] = $value1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['DstTargetList'])) {
            if (!empty($map['DstTargetList'])) {
                $model->dstTargetList = [];
                foreach ($map['DstTargetList'] as $key1 => $value1) {
                    $model->dstTargetList[$key1] = $value1;
                }
            }
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
            if (!empty($map['SrcTarget'])) {
                $model->srcTarget = [];
                foreach ($map['SrcTarget'] as $key1 => $value1) {
                    $model->srcTarget[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
