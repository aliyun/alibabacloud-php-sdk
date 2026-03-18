<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeTimeTriggerScalingRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeTimeTriggerScalingRulesResponseBody\data\scalingInRule;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeTimeTriggerScalingRulesResponseBody\data\scalingOutRule;

class data extends Model
{
    /**
     * @var string
     */
    public $nodeNumber;

    /**
     * @var scalingInRule
     */
    public $scalingInRule;

    /**
     * @var scalingOutRule
     */
    public $scalingOutRule;

    /**
     * @var string
     */
    public $scalingRuleId;

    /**
     * @var string
     */
    public $scalingRuleName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'nodeNumber' => 'NodeNumber',
        'scalingInRule' => 'ScalingInRule',
        'scalingOutRule' => 'ScalingOutRule',
        'scalingRuleId' => 'ScalingRuleId',
        'scalingRuleName' => 'ScalingRuleName',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->scalingInRule) {
            $this->scalingInRule->validate();
        }
        if (null !== $this->scalingOutRule) {
            $this->scalingOutRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeNumber) {
            $res['NodeNumber'] = $this->nodeNumber;
        }

        if (null !== $this->scalingInRule) {
            $res['ScalingInRule'] = null !== $this->scalingInRule ? $this->scalingInRule->toArray($noStream) : $this->scalingInRule;
        }

        if (null !== $this->scalingOutRule) {
            $res['ScalingOutRule'] = null !== $this->scalingOutRule ? $this->scalingOutRule->toArray($noStream) : $this->scalingOutRule;
        }

        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }

        if (null !== $this->scalingRuleName) {
            $res['ScalingRuleName'] = $this->scalingRuleName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['NodeNumber'])) {
            $model->nodeNumber = $map['NodeNumber'];
        }

        if (isset($map['ScalingInRule'])) {
            $model->scalingInRule = scalingInRule::fromMap($map['ScalingInRule']);
        }

        if (isset($map['ScalingOutRule'])) {
            $model->scalingOutRule = scalingOutRule::fromMap($map['ScalingOutRule']);
        }

        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }

        if (isset($map['ScalingRuleName'])) {
            $model->scalingRuleName = $map['ScalingRuleName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
