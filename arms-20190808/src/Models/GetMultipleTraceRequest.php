<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetMultipleTraceRequest extends Model
{
    /**
     * @example 1663999380000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1657692507000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example ac1400a115951745017447033d****
     *
     * @var string[]
     */
    public $traceIDs;
    protected $_name = [
        'endTime'   => 'EndTime',
        'regionId'  => 'RegionId',
        'startTime' => 'StartTime',
        'traceIDs'  => 'TraceIDs',
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
