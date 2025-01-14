<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes;

use AlibabaCloud\Tea\Model;

class trigger extends Model
{
    /**
     * @description The CRON expression for scheduling.
     *
     * @example 00 00 00 * * ?
     *
     * @var string
     */
    public $cron;

    /**
     * @description The end time of the validity period of the trigger.
     *
     * @example 9999-01-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The trigger ID.
     *
     * @example 543680677872062XXXX
     *
     * @var int
     */
    public $id;

    /**
     * @description The start time of the validity period of the trigger.
     *
     * @example 1970-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The time zone.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The type of the trigger.
     *
     * Valid values:
     *
     *   Scheduler
     *   Manual
     *   Steaming
     *
     *
     * @example Scheduler
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cron'      => 'Cron',
        'endTime'   => 'EndTime',
        'id'        => 'Id',
        'startTime' => 'StartTime',
        'timezone'  => 'Timezone',
        'type'      => 'Type',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
