<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetTraceRequest extends Model
{
    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * > If the ID of the trace is 30 characters in length, this parameter is optional. Otherwise, this parameter is required.
     * @example 1623827603000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * > If the ID of the trace is 30 characters in length, this parameter is optional. Otherwise, this parameter is required.
     * @example 1623827602000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The trace ID. You can log on to the ARMS console and obtain the trace ID on the **Trace Query** page or **Interface Snapshot** tab.
     *
     * @example ac14001a15954493811405707d****
     *
     * @var string
     */
    public $traceID;
    protected $_name = [
        'endTime'   => 'EndTime',
        'regionId'  => 'RegionId',
        'startTime' => 'StartTime',
        'traceID'   => 'TraceID',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
