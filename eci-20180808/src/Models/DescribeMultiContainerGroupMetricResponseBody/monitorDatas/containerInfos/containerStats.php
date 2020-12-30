<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\acceleratorStats;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\cpuStats;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\diskIoStats;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\fsStats;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\memoryStats;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\networkStats;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\taskStats;
use AlibabaCloud\Tea\Model;

class containerStats extends Model
{
    /**
     * @var networkStats
     */
    public $networkStats;

    /**
     * @var fsStats[]
     */
    public $fsStats;

    /**
     * @var acceleratorStats[]
     */
    public $acceleratorStats;

    /**
     * @var cpuStats
     */
    public $cpuStats;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var memoryStats
     */
    public $memoryStats;

    /**
     * @var taskStats
     */
    public $taskStats;

    /**
     * @var diskIoStats
     */
    public $diskIoStats;
    protected $_name = [
        'networkStats'     => 'NetworkStats',
        'fsStats'          => 'FsStats',
        'acceleratorStats' => 'AcceleratorStats',
        'cpuStats'         => 'CpuStats',
        'timestamp'        => 'Timestamp',
        'memoryStats'      => 'MemoryStats',
        'taskStats'        => 'TaskStats',
        'diskIoStats'      => 'DiskIoStats',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkStats) {
            $res['NetworkStats'] = null !== $this->networkStats ? $this->networkStats->toMap() : null;
        }
        if (null !== $this->fsStats) {
            $res['FsStats'] = [];
            if (null !== $this->fsStats && \is_array($this->fsStats)) {
                $n = 0;
                foreach ($this->fsStats as $item) {
                    $res['FsStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->acceleratorStats) {
            $res['AcceleratorStats'] = [];
            if (null !== $this->acceleratorStats && \is_array($this->acceleratorStats)) {
                $n = 0;
                foreach ($this->acceleratorStats as $item) {
                    $res['AcceleratorStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cpuStats) {
            $res['CpuStats'] = null !== $this->cpuStats ? $this->cpuStats->toMap() : null;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->memoryStats) {
            $res['MemoryStats'] = null !== $this->memoryStats ? $this->memoryStats->toMap() : null;
        }
        if (null !== $this->taskStats) {
            $res['TaskStats'] = null !== $this->taskStats ? $this->taskStats->toMap() : null;
        }
        if (null !== $this->diskIoStats) {
            $res['DiskIoStats'] = null !== $this->diskIoStats ? $this->diskIoStats->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkStats'])) {
            $model->networkStats = networkStats::fromMap($map['NetworkStats']);
        }
        if (isset($map['FsStats'])) {
            if (!empty($map['FsStats'])) {
                $model->fsStats = [];
                $n              = 0;
                foreach ($map['FsStats'] as $item) {
                    $model->fsStats[$n++] = null !== $item ? fsStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AcceleratorStats'])) {
            if (!empty($map['AcceleratorStats'])) {
                $model->acceleratorStats = [];
                $n                       = 0;
                foreach ($map['AcceleratorStats'] as $item) {
                    $model->acceleratorStats[$n++] = null !== $item ? acceleratorStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CpuStats'])) {
            $model->cpuStats = cpuStats::fromMap($map['CpuStats']);
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['MemoryStats'])) {
            $model->memoryStats = memoryStats::fromMap($map['MemoryStats']);
        }
        if (isset($map['TaskStats'])) {
            $model->taskStats = taskStats::fromMap($map['TaskStats']);
        }
        if (isset($map['DiskIoStats'])) {
            $model->diskIoStats = diskIoStats::fromMap($map['DiskIoStats']);
        }

        return $model;
    }
}
