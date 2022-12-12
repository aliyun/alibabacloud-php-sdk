<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDataSharePerformanceResponseBody\performanceKeys;
use AlibabaCloud\Tea\Model;

class DescribeDataSharePerformanceResponseBody extends Model
{
    /**
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2022-08-03T15:10Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var performanceKeys[]
     */
    public $performanceKeys;

    /**
     * @example BBE00C04-A3E8-4114-881D-0480A72CB92E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2022-08-03T15:00Z
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
     * @return DescribeDataSharePerformanceResponseBody
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
