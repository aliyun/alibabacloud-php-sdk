<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class UpdateContextDatabaseSyncJobScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $dailyTimes;

    /**
     * @var int
     */
    public $intervalMinutes;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $missedPolicy;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dailyTimes' => 'DailyTimes',
        'intervalMinutes' => 'IntervalMinutes',
        'jobId' => 'JobId',
        'missedPolicy' => 'MissedPolicy',
        'type' => 'Type',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->dailyTimes)) {
            Model::validateArray($this->dailyTimes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dailyTimes) {
            if (\is_array($this->dailyTimes)) {
                $res['DailyTimes'] = [];
                $n1 = 0;
                foreach ($this->dailyTimes as $item1) {
                    $res['DailyTimes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intervalMinutes) {
            $res['IntervalMinutes'] = $this->intervalMinutes;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->missedPolicy) {
            $res['MissedPolicy'] = $this->missedPolicy;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DailyTimes'])) {
            if (!empty($map['DailyTimes'])) {
                $model->dailyTimes = [];
                $n1 = 0;
                foreach ($map['DailyTimes'] as $item1) {
                    $model->dailyTimes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IntervalMinutes'])) {
            $model->intervalMinutes = $map['IntervalMinutes'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['MissedPolicy'])) {
            $model->missedPolicy = $map['MissedPolicy'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
