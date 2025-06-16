<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeEdgeContainerAppStatsResponseBody\points;

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

    public function validate()
    {
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->points)) {
                $res['Points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['Points'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Points'] as $item1) {
                    $model->points[$n1] = points::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
