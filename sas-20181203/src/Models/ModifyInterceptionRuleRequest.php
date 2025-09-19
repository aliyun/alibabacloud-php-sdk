<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyInterceptionRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var mixed[]
     */
    public $dstTarget;

    /**
     * @var int
     */
    public $interceptType;

    /**
     * @var int
     */
    public $orderIndex;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $ruleSwitch;

    /**
     * @var mixed[]
     */
    public $srcTarget;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dstTarget' => 'DstTarget',
        'interceptType' => 'InterceptType',
        'orderIndex' => 'OrderIndex',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
        'ruleSwitch' => 'RuleSwitch',
        'srcTarget' => 'SrcTarget',
    ];

    public function validate()
    {
        if (\is_array($this->dstTarget)) {
            Model::validateArray($this->dstTarget);
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

        if (null !== $this->dstTarget) {
            if (\is_array($this->dstTarget)) {
                $res['DstTarget'] = [];
                foreach ($this->dstTarget as $key1 => $value1) {
                    $res['DstTarget'][$key1] = $value1;
                }
            }
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

        if (isset($map['DstTarget'])) {
            if (!empty($map['DstTarget'])) {
                $model->dstTarget = [];
                foreach ($map['DstTarget'] as $key1 => $value1) {
                    $model->dstTarget[$key1] = $value1;
                }
            }
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
