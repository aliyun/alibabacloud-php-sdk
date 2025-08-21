<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class UpdateAutoThrottleRulesAsyncRequest extends Model
{
    /**
     * @var float
     */
    public $abnormalDuration;

    /**
     * @var int
     */
    public $activeSessions;

    /**
     * @var string
     */
    public $allowThrottleEndTime;

    /**
     * @var string
     */
    public $allowThrottleStartTime;

    /**
     * @var bool
     */
    public $autoKillSession;

    /**
     * @var string
     */
    public $consoleContext;

    /**
     * @var string
     */
    public $cpuSessionRelation;

    /**
     * @var float
     */
    public $cpuUsage;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var float
     */
    public $maxThrottleTime;

    /**
     * @var string
     */
    public $resultId;
    protected $_name = [
        'abnormalDuration' => 'AbnormalDuration',
        'activeSessions' => 'ActiveSessions',
        'allowThrottleEndTime' => 'AllowThrottleEndTime',
        'allowThrottleStartTime' => 'AllowThrottleStartTime',
        'autoKillSession' => 'AutoKillSession',
        'consoleContext' => 'ConsoleContext',
        'cpuSessionRelation' => 'CpuSessionRelation',
        'cpuUsage' => 'CpuUsage',
        'instanceIds' => 'InstanceIds',
        'maxThrottleTime' => 'MaxThrottleTime',
        'resultId' => 'ResultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
