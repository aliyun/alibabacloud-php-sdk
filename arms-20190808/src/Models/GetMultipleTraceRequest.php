<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetMultipleTraceRequest extends Model
{
    /**
     * @description The time when the trace ends. The value is a timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     *
     * @example 1663999380000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of the page to return. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return per page, the maximum value is 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The start time of the trace. The value is a timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     *
     * @example 1657692507000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The trace IDs.
     *
     * This parameter is required.
     *
     * @example ac1400a115951745017447033d****
     *
     * @var string[]
     */
    public $traceIDs;
    protected $_name = [
        'endTime' => 'EndTime',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'traceIDs' => 'TraceIDs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->traceIDs) {
            $res['TraceIDs'] = $this->traceIDs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultipleTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TraceIDs'])) {
            if (!empty($map['TraceIDs'])) {
                $model->traceIDs = $map['TraceIDs'];
            }
        }

        return $model;
    }
}
