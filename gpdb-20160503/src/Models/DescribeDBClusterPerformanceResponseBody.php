<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBClusterPerformanceResponseBody\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterPerformanceResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The end time of the query. The time follows the ISO 8601 standard in the `YYYY-MM-DDTHH:mmZ` format. The time is displayed in UTC.
     *
     * @example 2021-11-03T15:10Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Details of the performance metrics of the instance.
     *
     * @var performanceKeys[]
     */
    public $performanceKeys;

    /**
     * @description The ID of the request.
     *
     * @example 8E8990F0-C81E-4C94-8F51-5F**********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time of the query. The time follows the ISO 8601 standard in the `YYYY-MM-DDTHH:mmZ` format. The time is displayed in UTC.
     *
     * @example 2021-11-03T15:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'     => 'DBClusterId',
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
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->performanceKeys) {
            $res['PerformanceKeys'] = [];
            if (null !== $this->performanceKeys && \is_array($this->performanceKeys)) {
                $n = 0;
                foreach ($this->performanceKeys as $item) {
                    $res['PerformanceKeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDBClusterPerformanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PerformanceKeys'])) {
            if (!empty($map['PerformanceKeys'])) {
                $model->performanceKeys = [];
                $n                      = 0;
                foreach ($map['PerformanceKeys'] as $item) {
                    $model->performanceKeys[$n++] = null !== $item ? performanceKeys::fromMap($item) : $item;
                }
            }
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
