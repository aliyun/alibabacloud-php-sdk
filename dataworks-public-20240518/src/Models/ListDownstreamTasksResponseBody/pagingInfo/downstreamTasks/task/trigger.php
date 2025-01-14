<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDownstreamTasksResponseBody\pagingInfo\downstreamTasks\task;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @var string
     */
    public $cron;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $recurrence;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cron'       => 'Cron',
        'endTime'    => 'EndTime',
        'recurrence' => 'Recurrence',
        'startTime'  => 'StartTime',
        'timezone'   => 'Timezone',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->recurrence) {
            $res['Recurrence'] = $this->recurrence;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trigger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Recurrence'])) {
            $model->recurrence = $map['Recurrence'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
