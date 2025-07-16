<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDBNodePerformanceResponseBody extends Model
{
    /**
     * @example pxc-********
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @example 2021-10-20T02:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var performanceKeys
     */
    public $performanceKeys;

    /**
     * @example EFB5E10B-5268-170F-A378-9AF86CCEACC8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2021-10-20T00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'endTime' => 'EndTime',
        'performanceKeys' => 'PerformanceKeys',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
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
     * @return DescribeDBNodePerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
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
