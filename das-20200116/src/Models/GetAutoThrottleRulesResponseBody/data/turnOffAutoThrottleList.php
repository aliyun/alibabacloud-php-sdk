<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class turnOffAutoThrottleList extends Model
{
    /**
     * @description The maximum period of time during which the automatic SQL throttling feature is triggered. Unit: minutes.
     *
     * @example 2
     *
     * @var float
     */
    public $abnormalDuration;

    /**
     * @description The maximum number of active sessions.
     *
     * @example 64
     *
     * @var int
     */
    public $activeSessions;

    /**
     * @description The end time of the throttling window. The value of this parameter is in UTC.
     *
     * @example 23:59Z
     *
     * @var string
     */
    public $allowThrottleEndTime;

    /**
     * @description The start time of the throttling window. The value of this parameter is in UTC.
     *
     * @example 00:00Z
     *
     * @var string
     */
    public $allowThrottleStartTime;

    /**
     * @description Indicates whether abnormal SQL statements in execution are terminated at a time. Valid values:
     *
     * > Abnormal SQL statements use the same template as the SQL statements that need to be throttled.
     *
     * **true**
     * **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoKillSession;

    /**
     * @description The logical relationship between the CPU utilization threshold and the maximum number of active sessions. Valid values:
     *
     * **AND**
     * **OR**
     *
     * @example OR
     *
     * @var string
     */
    public $cpuSessionRelation;

    /**
     * @description The CPU utilization threshold.
     *
     * @example 80
     *
     * @var float
     */
    public $cpuUsage;

    /**
     * @description The database instance ID.
     *
     * @example rm-2ze9xrhze0709****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum throttling duration. Unit: minutes.
     *
     * @example 10
     *
     * @var float
     */
    public $maxThrottleTime;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the database instance.
     *
     * @example 140692647406****
     *
     * @var string
     */
    public $userId;

    /**
     * @description Indicates whether the automatic SQL throttling feature is enabled. Valid values:
     *
     * **true**
     * **false**
     *
     * @example false
     *
     * @var bool
     */
    public $visible;
    protected $_name = [
        'abnormalDuration'       => 'AbnormalDuration',
        'activeSessions'         => 'ActiveSessions',
        'allowThrottleEndTime'   => 'AllowThrottleEndTime',
        'allowThrottleStartTime' => 'AllowThrottleStartTime',
        'autoKillSession'        => 'AutoKillSession',
        'cpuSessionRelation'     => 'CpuSessionRelation',
        'cpuUsage'               => 'CpuUsage',
        'instanceId'             => 'InstanceId',
        'maxThrottleTime'        => 'MaxThrottleTime',
        'userId'                 => 'UserId',
        'visible'                => 'Visible',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalDuration) {
            $res['AbnormalDuration'] = $this->abnormalDuration;
        }
        if (null !== $this->activeSessions) {
            $res['ActiveSessions'] = $this->activeSessions;
        }
        if (null !== $this->allowThrottleEndTime) {
            $res['AllowThrottleEndTime'] = $this->allowThrottleEndTime;
        }
        if (null !== $this->allowThrottleStartTime) {
            $res['AllowThrottleStartTime'] = $this->allowThrottleStartTime;
        }
        if (null !== $this->autoKillSession) {
            $res['AutoKillSession'] = $this->autoKillSession;
        }
        if (null !== $this->cpuSessionRelation) {
            $res['CpuSessionRelation'] = $this->cpuSessionRelation;
        }
        if (null !== $this->cpuUsage) {
            $res['CpuUsage'] = $this->cpuUsage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxThrottleTime) {
            $res['MaxThrottleTime'] = $this->maxThrottleTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return turnOffAutoThrottleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalDuration'])) {
            $model->abnormalDuration = $map['AbnormalDuration'];
        }
        if (isset($map['ActiveSessions'])) {
            $model->activeSessions = $map['ActiveSessions'];
        }
        if (isset($map['AllowThrottleEndTime'])) {
            $model->allowThrottleEndTime = $map['AllowThrottleEndTime'];
        }
        if (isset($map['AllowThrottleStartTime'])) {
            $model->allowThrottleStartTime = $map['AllowThrottleStartTime'];
        }
        if (isset($map['AutoKillSession'])) {
            $model->autoKillSession = $map['AutoKillSession'];
        }
        if (isset($map['CpuSessionRelation'])) {
            $model->cpuSessionRelation = $map['CpuSessionRelation'];
        }
        if (isset($map['CpuUsage'])) {
            $model->cpuUsage = $map['CpuUsage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxThrottleTime'])) {
            $model->maxThrottleTime = $map['MaxThrottleTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }

        return $model;
    }
}
