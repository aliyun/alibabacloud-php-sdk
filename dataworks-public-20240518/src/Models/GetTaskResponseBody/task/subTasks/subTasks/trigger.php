<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task\subTasks\subTasks;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @example 00 00 00 * * ?
     *
     * @var string
     */
    public $cron;

    /**
     * @example 9999-01-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example Normal
     *
     * @var string
     */
    public $recurrence;

    /**
     * @example 1970-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Scheduler
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cron'       => 'Cron',
        'endTime'    => 'EndTime',
        'recurrence' => 'Recurrence',
        'startTime'  => 'StartTime',
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
