<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetWorkflowInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class wfInstanceInfo extends Model
{
    /**
     * @example 2023-01-03 18:00:00
     *
     * @var string
     */
    public $dataTime;

    /**
     * @example 2023-01-03 18:00:21
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2023-01-03 18:00:00
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example 2023-01-03 18:00:01
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'dataTime'     => 'DataTime',
        'endTime'      => 'EndTime',
        'scheduleTime' => 'ScheduleTime',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wfInstanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
