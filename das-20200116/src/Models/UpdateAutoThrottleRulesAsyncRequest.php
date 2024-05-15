<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class UpdateAutoThrottleRulesAsyncRequest extends Model
{
    /**
     * @description The duration threshold for triggering automatic SQL throttling. Set this parameter to a positive integer that is greater than or equal to 2. Unit: minutes.
     *
     * This parameter is required.
     * @example 2
     *
     * @var float
     */
    public $abnormalDuration;

    /**
     * @description The maximum number of active sessions.
     *
     *   Specify an integer that is greater than or equal to 16 when the CPU utilization threshold and the maximum number of active sessions are in the **OR** relationship.
     *   Specify an integer that is greater than or equal to 2 when the CPU utilization threshold and the maximum number of active sessions are in the **AND** relationship.
     *
     * This parameter is required.
     * @example 16
     *
     * @var int
     */
    public $activeSessions;

    /**
     * @description The end time of the throttling window. The time must be in UTC.
     *
     * This parameter is required.
     * @example 23:59Z
     *
     * @var string
     */
    public $allowThrottleEndTime;

    /**
     * @description The start time of the throttling window. The time must be in UTC.
     *
     * This parameter is required.
     * @example 00:00Z
     *
     * @var string
     */
    public $allowThrottleStartTime;

    /**
     * @description Specifies whether to terminate abnormal SQL statements in execution at the same time. Valid values:
     *
     * >  Abnormal SQL statements use the same template as the SQL statements that need to be throttled.
     *
     *   **true**
     *   **false**
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $autoKillSession;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The logical relationship between the CPU utilization threshold and the maximum number of active sessions. Valid values:
     *
     *   **AND**
     *   **OR**
     *
     * This parameter is required.
     * @example OR
     *
     * @var string
     */
    public $cpuSessionRelation;

    /**
     * @description The CPU utilization threshold, in percentages. Valid values: 70 to 100.
     *
     * This parameter is required.
     * @example 70
     *
     * @var float
     */
    public $cpuUsage;

    /**
     * @description The database instance IDs.
     *
     * This parameter is required.
     * @example [\\"rm-2ze8g2am97624****\\",\\"rm-2ze9xrhze0709****\\"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The maximum throttling duration. Set this parameter to a positive integer. Unit: minutes.
     *
     * This parameter is required.
     * @example 10
     *
     * @var float
     */
    public $maxThrottleTime;

    /**
     * @description The ID of the asynchronous request.
     *
     * >  You can leave this parameter empty when you call the operation to initiate the request for the first time, and use the value of this parameter contained in the response to the first request for subsequent requests.
     * @example async__507044db6c4eadfa2dab9b084e80****
     *
     * @var string
     */
    public $resultId;
    protected $_name = [
        'abnormalDuration'       => 'AbnormalDuration',
        'activeSessions'         => 'ActiveSessions',
        'allowThrottleEndTime'   => 'AllowThrottleEndTime',
        'allowThrottleStartTime' => 'AllowThrottleStartTime',
        'autoKillSession'        => 'AutoKillSession',
        'consoleContext'         => 'ConsoleContext',
        'cpuSessionRelation'     => 'CpuSessionRelation',
        'cpuUsage'               => 'CpuUsage',
        'instanceIds'            => 'InstanceIds',
        'maxThrottleTime'        => 'MaxThrottleTime',
        'resultId'               => 'ResultId',
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
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->cpuSessionRelation) {
            $res['CpuSessionRelation'] = $this->cpuSessionRelation;
        }
        if (null !== $this->cpuUsage) {
            $res['CpuUsage'] = $this->cpuUsage;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->maxThrottleTime) {
            $res['MaxThrottleTime'] = $this->maxThrottleTime;
        }
        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAutoThrottleRulesAsyncRequest
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
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['CpuSessionRelation'])) {
            $model->cpuSessionRelation = $map['CpuSessionRelation'];
        }
        if (isset($map['CpuUsage'])) {
            $model->cpuUsage = $map['CpuUsage'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['MaxThrottleTime'])) {
            $model->maxThrottleTime = $map['MaxThrottleTime'];
        }
        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }

        return $model;
    }
}
