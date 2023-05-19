<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeRealtimeDeliveryAccRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC+0.
     *
     * The end of the time range to query. The end time must be later than the start time.
     * @example 2016-10-20T05:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time interval between the data entries. Unit: seconds. The value varies based on the values of the **StartTime** and **EndTime** parameters. Valid values:
     *
     *   If the time span between StartTime and EndTime is less than 3 days, valid values are **300**, **3600**, and **86400**. Default value: **300**.
     *   If the time span between StartTime and EndTime is from 3 to 31 days (31 days excluded), valid values are **3600** and **86400**. Default value: **3600**.
     *   If the time span between StartTime and EndTime is 31 days or longer, the valid value is **86400**. Default value: **86400**.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The timestamp of the data.
     *
     * @example LogStore
     *
     * @var string
     */
    public $logStore;

    /**
     * @description The name of the Log Service project that is used for real-time log delivery. By default, all projects are queried.
     *
     * @example Project
     *
     * @var string
     */
    public $project;

    /**
     * @description The information about real-time log delivery.
     *
     * @example 2016-10-20T04:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'interval'  => 'Interval',
        'logStore'  => 'LogStore',
        'project'   => 'Project',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRealtimeDeliveryAccRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
