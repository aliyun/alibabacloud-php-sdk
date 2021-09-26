<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingCommonConfigResponseBody extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description autoScalingHookHeartbeatDefaultTime
     *
     * @var int
     */
    public $autoScalingHookHeartbeatDefaultTime;

    /**
     * @var int
     */
    public $autoScalingCoolDownTime;

    /**
     * @var int
     */
    public $autoScalingMNSScalingThreadSleepTime;

    /**
     * @var int
     */
    public $autoScalingGroupMinSizeLimit;

    /**
     * @var int
     */
    public $autoScalingGroupMaxSizeLimit;

    /**
     * @var int
     */
    public $autoScalingRuleMinDelayLimit;

    /**
     * @var int
     */
    public $autoScalingRuleAlarmDelayLimit;

    /**
     * @var int
     */
    public $autoScalingRuleAlarmSilentTime;

    /**
     * @var int
     */
    public $autoScalingConfigSystemDiskSize;

    /**
     * @var int
     */
    public $autoScalingConfigDecommissionQueryInterval;
    protected $_name = [
        'requestId'                                  => 'requestId',
        'autoScalingHookHeartbeatDefaultTime'        => 'AutoScalingHookHeartbeatDefaultTime',
        'autoScalingCoolDownTime'                    => 'AutoScalingCoolDownTime',
        'autoScalingMNSScalingThreadSleepTime'       => 'AutoScalingMNSScalingThreadSleepTime',
        'autoScalingGroupMinSizeLimit'               => 'AutoScalingGroupMinSizeLimit',
        'autoScalingGroupMaxSizeLimit'               => 'AutoScalingGroupMaxSizeLimit',
        'autoScalingRuleMinDelayLimit'               => 'AutoScalingRuleMinDelayLimit',
        'autoScalingRuleAlarmDelayLimit'             => 'AutoScalingRuleAlarmDelayLimit',
        'autoScalingRuleAlarmSilentTime'             => 'AutoScalingRuleAlarmSilentTime',
        'autoScalingConfigSystemDiskSize'            => 'AutoScalingConfigSystemDiskSize',
        'autoScalingConfigDecommissionQueryInterval' => 'AutoScalingConfigDecommissionQueryInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->autoScalingHookHeartbeatDefaultTime) {
            $res['AutoScalingHookHeartbeatDefaultTime'] = $this->autoScalingHookHeartbeatDefaultTime;
        }
        if (null !== $this->autoScalingCoolDownTime) {
            $res['AutoScalingCoolDownTime'] = $this->autoScalingCoolDownTime;
        }
        if (null !== $this->autoScalingMNSScalingThreadSleepTime) {
            $res['AutoScalingMNSScalingThreadSleepTime'] = $this->autoScalingMNSScalingThreadSleepTime;
        }
        if (null !== $this->autoScalingGroupMinSizeLimit) {
            $res['AutoScalingGroupMinSizeLimit'] = $this->autoScalingGroupMinSizeLimit;
        }
        if (null !== $this->autoScalingGroupMaxSizeLimit) {
            $res['AutoScalingGroupMaxSizeLimit'] = $this->autoScalingGroupMaxSizeLimit;
        }
        if (null !== $this->autoScalingRuleMinDelayLimit) {
            $res['AutoScalingRuleMinDelayLimit'] = $this->autoScalingRuleMinDelayLimit;
        }
        if (null !== $this->autoScalingRuleAlarmDelayLimit) {
            $res['AutoScalingRuleAlarmDelayLimit'] = $this->autoScalingRuleAlarmDelayLimit;
        }
        if (null !== $this->autoScalingRuleAlarmSilentTime) {
            $res['AutoScalingRuleAlarmSilentTime'] = $this->autoScalingRuleAlarmSilentTime;
        }
        if (null !== $this->autoScalingConfigSystemDiskSize) {
            $res['AutoScalingConfigSystemDiskSize'] = $this->autoScalingConfigSystemDiskSize;
        }
        if (null !== $this->autoScalingConfigDecommissionQueryInterval) {
            $res['AutoScalingConfigDecommissionQueryInterval'] = $this->autoScalingConfigDecommissionQueryInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingCommonConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['AutoScalingHookHeartbeatDefaultTime'])) {
            $model->autoScalingHookHeartbeatDefaultTime = $map['AutoScalingHookHeartbeatDefaultTime'];
        }
        if (isset($map['AutoScalingCoolDownTime'])) {
            $model->autoScalingCoolDownTime = $map['AutoScalingCoolDownTime'];
        }
        if (isset($map['AutoScalingMNSScalingThreadSleepTime'])) {
            $model->autoScalingMNSScalingThreadSleepTime = $map['AutoScalingMNSScalingThreadSleepTime'];
        }
        if (isset($map['AutoScalingGroupMinSizeLimit'])) {
            $model->autoScalingGroupMinSizeLimit = $map['AutoScalingGroupMinSizeLimit'];
        }
        if (isset($map['AutoScalingGroupMaxSizeLimit'])) {
            $model->autoScalingGroupMaxSizeLimit = $map['AutoScalingGroupMaxSizeLimit'];
        }
        if (isset($map['AutoScalingRuleMinDelayLimit'])) {
            $model->autoScalingRuleMinDelayLimit = $map['AutoScalingRuleMinDelayLimit'];
        }
        if (isset($map['AutoScalingRuleAlarmDelayLimit'])) {
            $model->autoScalingRuleAlarmDelayLimit = $map['AutoScalingRuleAlarmDelayLimit'];
        }
        if (isset($map['AutoScalingRuleAlarmSilentTime'])) {
            $model->autoScalingRuleAlarmSilentTime = $map['AutoScalingRuleAlarmSilentTime'];
        }
        if (isset($map['AutoScalingConfigSystemDiskSize'])) {
            $model->autoScalingConfigSystemDiskSize = $map['AutoScalingConfigSystemDiskSize'];
        }
        if (isset($map['AutoScalingConfigDecommissionQueryInterval'])) {
            $model->autoScalingConfigDecommissionQueryInterval = $map['AutoScalingConfigDecommissionQueryInterval'];
        }

        return $model;
    }
}
