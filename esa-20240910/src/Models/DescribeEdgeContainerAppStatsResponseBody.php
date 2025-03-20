<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeEdgeContainerAppStatsResponseBody\points;
use AlibabaCloud\Tea\Model;

class DescribeEdgeContainerAppStatsResponseBody extends Model
{
    /**
     * @var float
     */
    public $cpuUsageSecondsQuotaRateAvg;

    /**
     * @var float
     */
    public $cpuUsageSecondsTotalAvg;

    /**
     * @var float
     */
    public $fsReadsBytesAvgAvg;

    /**
     * @var float
     */
    public $fsWritesBytesAvgAvg;

    /**
     * @var float
     */
    public $memoryRssAvg;

    /**
     * @var float
     */
    public $memoryRssQuotaRateAvg;

    /**
     * @var float
     */
    public $podReadyRateAvg;

    /**
     * @var points[]
     */
    public $points;

    /**
     * @description Id of the request
     *
     * @example 35C66C7B-671H-4297-9187-2C4477247A78
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cpuUsageSecondsQuotaRateAvg' => 'CpuUsageSecondsQuotaRateAvg',
        'cpuUsageSecondsTotalAvg' => 'CpuUsageSecondsTotalAvg',
        'fsReadsBytesAvgAvg' => 'FsReadsBytesAvgAvg',
        'fsWritesBytesAvgAvg' => 'FsWritesBytesAvgAvg',
        'memoryRssAvg' => 'MemoryRssAvg',
        'memoryRssQuotaRateAvg' => 'MemoryRssQuotaRateAvg',
        'podReadyRateAvg' => 'PodReadyRateAvg',
        'points' => 'Points',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuUsageSecondsQuotaRateAvg) {
            $res['CpuUsageSecondsQuotaRateAvg'] = $this->cpuUsageSecondsQuotaRateAvg;
        }
        if (null !== $this->cpuUsageSecondsTotalAvg) {
            $res['CpuUsageSecondsTotalAvg'] = $this->cpuUsageSecondsTotalAvg;
        }
        if (null !== $this->fsReadsBytesAvgAvg) {
            $res['FsReadsBytesAvgAvg'] = $this->fsReadsBytesAvgAvg;
        }
        if (null !== $this->fsWritesBytesAvgAvg) {
            $res['FsWritesBytesAvgAvg'] = $this->fsWritesBytesAvgAvg;
        }
        if (null !== $this->memoryRssAvg) {
            $res['MemoryRssAvg'] = $this->memoryRssAvg;
        }
        if (null !== $this->memoryRssQuotaRateAvg) {
            $res['MemoryRssQuotaRateAvg'] = $this->memoryRssQuotaRateAvg;
        }
        if (null !== $this->podReadyRateAvg) {
            $res['PodReadyRateAvg'] = $this->podReadyRateAvg;
        }
        if (null !== $this->points) {
            $res['Points'] = [];
            if (null !== $this->points && \is_array($this->points)) {
                $n = 0;
                foreach ($this->points as $item) {
                    $res['Points'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeContainerAppStatsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuUsageSecondsQuotaRateAvg'])) {
            $model->cpuUsageSecondsQuotaRateAvg = $map['CpuUsageSecondsQuotaRateAvg'];
        }
        if (isset($map['CpuUsageSecondsTotalAvg'])) {
            $model->cpuUsageSecondsTotalAvg = $map['CpuUsageSecondsTotalAvg'];
        }
        if (isset($map['FsReadsBytesAvgAvg'])) {
            $model->fsReadsBytesAvgAvg = $map['FsReadsBytesAvgAvg'];
        }
        if (isset($map['FsWritesBytesAvgAvg'])) {
            $model->fsWritesBytesAvgAvg = $map['FsWritesBytesAvgAvg'];
        }
        if (isset($map['MemoryRssAvg'])) {
            $model->memoryRssAvg = $map['MemoryRssAvg'];
        }
        if (isset($map['MemoryRssQuotaRateAvg'])) {
            $model->memoryRssQuotaRateAvg = $map['MemoryRssQuotaRateAvg'];
        }
        if (isset($map['PodReadyRateAvg'])) {
            $model->podReadyRateAvg = $map['PodReadyRateAvg'];
        }
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n = 0;
                foreach ($map['Points'] as $item) {
                    $model->points[$n++] = null !== $item ? points::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
