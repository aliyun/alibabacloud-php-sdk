<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeScalingCommonConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $autoScalingHookHeartbeatDefaultTime;

    /**
     * @var int
     */
    public $autoScalingRuleAlarmDelayLimit;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $autoScalingGroupMaxSizeLimit;

    /**
     * @var int
     */
    public $autoScalingMNSScalingThreadSleepTime;

    /**
     * @var int
     */
    public $autoScalingConfigDecommissionQueryInterval;

    /**
     * @var int
     */
    public $autoScalingCoolDownTime;

    /**
     * @var int
     */
    public $autoScalingRuleMinDelayLimit;

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
    public $autoScalingGroupMinSizeLimit;
    protected $_name = [
        'autoScalingHookHeartbeatDefaultTime'        => 'AutoScalingHookHeartbeatDefaultTime',
        'autoScalingRuleAlarmDelayLimit'             => 'AutoScalingRuleAlarmDelayLimit',
        'requestId'                                  => 'RequestId',
        'autoScalingGroupMaxSizeLimit'               => 'AutoScalingGroupMaxSizeLimit',
        'autoScalingMNSScalingThreadSleepTime'       => 'AutoScalingMNSScalingThreadSleepTime',
        'autoScalingConfigDecommissionQueryInterval' => 'AutoScalingConfigDecommissionQueryInterval',
        'autoScalingCoolDownTime'                    => 'AutoScalingCoolDownTime',
        'autoScalingRuleMinDelayLimit'               => 'AutoScalingRuleMinDelayLimit',
        'autoScalingRuleAlarmSilentTime'             => 'AutoScalingRuleAlarmSilentTime',
        'autoScalingConfigSystemDiskSize'            => 'AutoScalingConfigSystemDiskSize',
        'autoScalingGroupMinSizeLimit'               => 'AutoScalingGroupMinSizeLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScalingHookHeartbeatDefaultTime) {
            $res['AutoScalingHookHeartbeatDefaultTime'] = $this->autoScalingHookHeartbeatDefaultTime;
        }
        if (null !== $this->autoScalingRuleAlarmDelayLimit) {
            $res['AutoScalingRuleAlarmDelayLimit'] = $this->autoScalingRuleAlarmDelayLimit;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->autoScalingGroupMaxSizeLimit) {
            $res['AutoScalingGroupMaxSizeLimit'] = $this->autoScalingGroupMaxSizeLimit;
        }
        if (null !== $this->autoScalingMNSScalingThreadSleepTime) {
            $res['AutoScalingMNSScalingThreadSleepTime'] = $this->autoScalingMNSScalingThreadSleepTime;
        }
        if (null !== $this->autoScalingConfigDecommissionQueryInterval) {
            $res['AutoScalingConfigDecommissionQueryInterval'] = $this->autoScalingConfigDecommissionQueryInterval;
        }
        if (null !== $this->autoScalingCoolDownTime) {
            $res['AutoScalingCoolDownTime'] = $this->autoScalingCoolDownTime;
        }
        if (null !== $this->autoScalingRuleMinDelayLimit) {
            $res['AutoScalingRuleMinDelayLimit'] = $this->autoScalingRuleMinDelayLimit;
        }
        if (null !== $this->autoScalingRuleAlarmSilentTime) {
            $res['AutoScalingRuleAlarmSilentTime'] = $this->autoScalingRuleAlarmSilentTime;
        }
        if (null !== $this->autoScalingConfigSystemDiskSize) {
            $res['AutoScalingConfigSystemDiskSize'] = $this->autoScalingConfigSystemDiskSize;
        }
        if (null !== $this->autoScalingGroupMinSizeLimit) {
            $res['AutoScalingGroupMinSizeLimit'] = $this->autoScalingGroupMinSizeLimit;
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
        if (isset($map['AutoScalingHookHeartbeatDefaultTime'])) {
            $model->autoScalingHookHeartbeatDefaultTime = $map['AutoScalingHookHeartbeatDefaultTime'];
        }
        if (isset($map['AutoScalingRuleAlarmDelayLimit'])) {
            $model->autoScalingRuleAlarmDelayLimit = $map['AutoScalingRuleAlarmDelayLimit'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AutoScalingGroupMaxSizeLimit'])) {
            $model->autoScalingGroupMaxSizeLimit = $map['AutoScalingGroupMaxSizeLimit'];
        }
        if (isset($map['AutoScalingMNSScalingThreadSleepTime'])) {
            $model->autoScalingMNSScalingThreadSleepTime = $map['AutoScalingMNSScalingThreadSleepTime'];
        }
        if (isset($map['AutoScalingConfigDecommissionQueryInterval'])) {
            $model->autoScalingConfigDecommissionQueryInterval = $map['AutoScalingConfigDecommissionQueryInterval'];
        }
        if (isset($map['AutoScalingCoolDownTime'])) {
            $model->autoScalingCoolDownTime = $map['AutoScalingCoolDownTime'];
        }
        if (isset($map['AutoScalingRuleMinDelayLimit'])) {
            $model->autoScalingRuleMinDelayLimit = $map['AutoScalingRuleMinDelayLimit'];
        }
        if (isset($map['AutoScalingRuleAlarmSilentTime'])) {
            $model->autoScalingRuleAlarmSilentTime = $map['AutoScalingRuleAlarmSilentTime'];
        }
        if (isset($map['AutoScalingConfigSystemDiskSize'])) {
            $model->autoScalingConfigSystemDiskSize = $map['AutoScalingConfigSystemDiskSize'];
        }
        if (isset($map['AutoScalingGroupMinSizeLimit'])) {
            $model->autoScalingGroupMinSizeLimit = $map['AutoScalingGroupMinSizeLimit'];
        }

        return $model;
    }
}
