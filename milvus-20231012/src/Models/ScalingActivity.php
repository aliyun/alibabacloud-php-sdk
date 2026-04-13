<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class ScalingActivity extends Model
{
    /**
     * @var string
     */
    public $componentTypes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $scalingActivityId;

    /**
     * @var string
     */
    public $scalingActivityState;

    /**
     * @var string
     */
    public $scalingPolicyId;

    /**
     * @var string
     */
    public $scalingRuleDetail;

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
    public $startTime;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'componentTypes' => 'componentTypes',
        'description' => 'description',
        'endTime' => 'endTime',
        'instanceId' => 'instanceId',
        'policyType' => 'policyType',
        'scalingActivityId' => 'scalingActivityId',
        'scalingActivityState' => 'scalingActivityState',
        'scalingPolicyId' => 'scalingPolicyId',
        'scalingRuleDetail' => 'scalingRuleDetail',
        'scalingRuleId' => 'scalingRuleId',
        'scalingRuleName' => 'scalingRuleName',
        'startTime' => 'startTime',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentTypes) {
            $res['componentTypes'] = $this->componentTypes;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->policyType) {
            $res['policyType'] = $this->policyType;
        }

        if (null !== $this->scalingActivityId) {
            $res['scalingActivityId'] = $this->scalingActivityId;
        }

        if (null !== $this->scalingActivityState) {
            $res['scalingActivityState'] = $this->scalingActivityState;
        }

        if (null !== $this->scalingPolicyId) {
            $res['scalingPolicyId'] = $this->scalingPolicyId;
        }

        if (null !== $this->scalingRuleDetail) {
            $res['scalingRuleDetail'] = $this->scalingRuleDetail;
        }

        if (null !== $this->scalingRuleId) {
            $res['scalingRuleId'] = $this->scalingRuleId;
        }

        if (null !== $this->scalingRuleName) {
            $res['scalingRuleName'] = $this->scalingRuleName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['componentTypes'])) {
            $model->componentTypes = $map['componentTypes'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['policyType'])) {
            $model->policyType = $map['policyType'];
        }

        if (isset($map['scalingActivityId'])) {
            $model->scalingActivityId = $map['scalingActivityId'];
        }

        if (isset($map['scalingActivityState'])) {
            $model->scalingActivityState = $map['scalingActivityState'];
        }

        if (isset($map['scalingPolicyId'])) {
            $model->scalingPolicyId = $map['scalingPolicyId'];
        }

        if (isset($map['scalingRuleDetail'])) {
            $model->scalingRuleDetail = $map['scalingRuleDetail'];
        }

        if (isset($map['scalingRuleId'])) {
            $model->scalingRuleId = $map['scalingRuleId'];
        }

        if (isset($map['scalingRuleName'])) {
            $model->scalingRuleName = $map['scalingRuleName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
