<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class ModifyScalingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $newTriggerType;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $oldTriggerType;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $scalingRuleId;
    protected $_name = [
        'newTriggerType' => 'NewTriggerType',
        'nodeGroupId' => 'NodeGroupId',
        'oldTriggerType' => 'OldTriggerType',
        'rule' => 'Rule',
        'scalingRuleId' => 'ScalingRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newTriggerType) {
            $res['NewTriggerType'] = $this->newTriggerType;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->oldTriggerType) {
            $res['OldTriggerType'] = $this->oldTriggerType;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
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
        if (isset($map['NewTriggerType'])) {
            $model->newTriggerType = $map['NewTriggerType'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['OldTriggerType'])) {
            $model->oldTriggerType = $map['OldTriggerType'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }

        return $model;
    }
}
