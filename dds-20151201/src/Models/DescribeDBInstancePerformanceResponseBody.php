<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancePerformanceResponseBody extends Model
{
    /**
     * @description The end of the time range to query. The time is in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2022-06-13T11:58Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Details about the performance metrics.
     *
     * @var performanceKeys
     */
    public $performanceKeys;

    /**
     * @description The ID of the request.
     *
     * @example 4A300BC7-6D8F-527F-A2DB-A7768D26E9AC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range to query. The time is in the *yyyy-MM-dd*T*HH:mm*Z format. The time is displayed in UTC.
     *
     * @example 2022-06-13T10:58Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'         => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
        'requestId'       => 'RequestId',
        'startTime'       => 'StartTime',
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
        if (null !== $this->performanceKeys) {
            $res['PerformanceKeys'] = null !== $this->performanceKeys ? $this->performanceKeys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancePerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PerformanceKeys'])) {
            $model->performanceKeys = performanceKeys::fromMap($map['PerformanceKeys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
