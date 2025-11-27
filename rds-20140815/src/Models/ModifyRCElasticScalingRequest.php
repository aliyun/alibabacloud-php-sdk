<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyRCElasticScalingRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $scalingEnabled;

    /**
     * @var string
     */
    public $scheduledRule;
    protected $_name = [
        'dryRun' => 'DryRun',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'regionId' => 'RegionId',
        'scalingEnabled' => 'ScalingEnabled',
        'scheduledRule' => 'ScheduledRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scalingEnabled) {
            $res['ScalingEnabled'] = $this->scalingEnabled;
        }

        if (null !== $this->scheduledRule) {
            $res['ScheduledRule'] = $this->scheduledRule;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScalingEnabled'])) {
            $model->scalingEnabled = $map['ScalingEnabled'];
        }

        if (isset($map['ScheduledRule'])) {
            $model->scheduledRule = $map['ScheduledRule'];
        }

        return $model;
    }
}
