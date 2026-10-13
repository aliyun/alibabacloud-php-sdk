<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetContextDatabaseSyncJobScheduleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $autoPauseReason;

    /**
     * @var bool
     */
    public $autoPaused;

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
    public $missedPolicy;

    /**
     * @var string
     */
    public $nextRunAt;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'autoPauseReason' => 'AutoPauseReason',
        'autoPaused' => 'AutoPaused',
        'dailyTimes' => 'DailyTimes',
        'intervalMinutes' => 'IntervalMinutes',
        'missedPolicy' => 'MissedPolicy',
        'nextRunAt' => 'NextRunAt',
        'timezone' => 'Timezone',
        'type' => 'Type',
        'updatedAt' => 'UpdatedAt',
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
        if (null !== $this->autoPauseReason) {
            $res['AutoPauseReason'] = $this->autoPauseReason;
        }

        if (null !== $this->autoPaused) {
            $res['AutoPaused'] = $this->autoPaused;
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

        if (null !== $this->missedPolicy) {
            $res['MissedPolicy'] = $this->missedPolicy;
        }

        if (null !== $this->nextRunAt) {
            $res['NextRunAt'] = $this->nextRunAt;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
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
        if (isset($map['AutoPauseReason'])) {
            $model->autoPauseReason = $map['AutoPauseReason'];
        }

        if (isset($map['AutoPaused'])) {
            $model->autoPaused = $map['AutoPaused'];
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

        if (isset($map['MissedPolicy'])) {
            $model->missedPolicy = $map['MissedPolicy'];
        }

        if (isset($map['NextRunAt'])) {
            $model->nextRunAt = $map['NextRunAt'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
