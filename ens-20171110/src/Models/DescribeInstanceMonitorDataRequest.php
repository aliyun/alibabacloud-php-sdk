<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceMonitorDataRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. If the value of the seconds place is not 00, the start time is automatically set to the next minute.
     * @example 2019-10-30T08:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the instance. You can specify only one instance ID.
     *
     * @example yourInstance ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The precision of the monitoring data that you want to obtain. Valid values: 60, 300, 1200, 3600, and 14400. Default value: 60. Unit: seconds.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. If the value of the seconds place is not 00, the start time is automatically set to the next minute.
     * @example 2019-10-29T23:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'period'     => 'Period',
        'startTime'  => 'StartTime',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceMonitorDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
