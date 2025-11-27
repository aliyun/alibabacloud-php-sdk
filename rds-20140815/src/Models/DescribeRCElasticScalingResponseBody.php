<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCElasticScalingResponseBody\scheduledRuleTemplates;

class DescribeRCElasticScalingResponseBody extends Model
{
    /**
     * @var string
     */
    public $acuType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $scalingEnabled;

    /**
     * @var bool
     */
    public $scalingSupported;

    /**
     * @var string
     */
    public $scheduledRule;

    /**
     * @var scheduledRuleTemplates
     */
    public $scheduledRuleTemplates;

    /**
     * @var string
     */
    public $targetInstanceType;
    protected $_name = [
        'acuType' => 'AcuType',
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
        'scalingEnabled' => 'ScalingEnabled',
        'scalingSupported' => 'ScalingSupported',
        'scheduledRule' => 'ScheduledRule',
        'scheduledRuleTemplates' => 'ScheduledRuleTemplates',
        'targetInstanceType' => 'TargetInstanceType',
    ];

    public function validate()
    {
        if (null !== $this->scheduledRuleTemplates) {
            $this->scheduledRuleTemplates->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acuType) {
            $res['AcuType'] = $this->acuType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingEnabled) {
            $res['ScalingEnabled'] = $this->scalingEnabled;
        }

        if (null !== $this->scalingSupported) {
            $res['ScalingSupported'] = $this->scalingSupported;
        }

        if (null !== $this->scheduledRule) {
            $res['ScheduledRule'] = $this->scheduledRule;
        }

        if (null !== $this->scheduledRuleTemplates) {
            $res['ScheduledRuleTemplates'] = null !== $this->scheduledRuleTemplates ? $this->scheduledRuleTemplates->toArray($noStream) : $this->scheduledRuleTemplates;
        }

        if (null !== $this->targetInstanceType) {
            $res['TargetInstanceType'] = $this->targetInstanceType;
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
        if (isset($map['AcuType'])) {
            $model->acuType = $map['AcuType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScalingEnabled'])) {
            $model->scalingEnabled = $map['ScalingEnabled'];
        }

        if (isset($map['ScalingSupported'])) {
            $model->scalingSupported = $map['ScalingSupported'];
        }

        if (isset($map['ScheduledRule'])) {
            $model->scheduledRule = $map['ScheduledRule'];
        }

        if (isset($map['ScheduledRuleTemplates'])) {
            $model->scheduledRuleTemplates = scheduledRuleTemplates::fromMap($map['ScheduledRuleTemplates']);
        }

        if (isset($map['TargetInstanceType'])) {
            $model->targetInstanceType = $map['TargetInstanceType'];
        }

        return $model;
    }
}
