<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoScalingHistoryRequest extends Model
{
    /**
     * @description The type of the auto scaling task that you want to query. Set the value to **SPEC**, which indicates that you can query the history of only automatic performance scaling tasks.
     *
     * This parameter is required.
     * @example SPEC
     *
     * @var string
     */
    public $autoScalingTaskType;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1676605305796
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1675833788056
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'autoScalingTaskType' => 'AutoScalingTaskType',
        'endTime'             => 'EndTime',
        'instanceId'          => 'InstanceId',
        'startTime'           => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScalingTaskType) {
            $res['AutoScalingTaskType'] = $this->autoScalingTaskType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoScalingHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoScalingTaskType'])) {
            $model->autoScalingTaskType = $map['AutoScalingTaskType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
