<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\cpuStats\cpuCFS;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\cpuStats\cpuUsage;
use AlibabaCloud\Tea\Model;

class cpuStats extends Model
{
    /**
     * @var cpuUsage
     */
    public $cpuUsage;

    /**
     * @var int
     */
    public $loadAverage;

    /**
     * @var cpuCFS
     */
    public $cpuCFS;
    protected $_name = [
        'cpuUsage'    => 'CpuUsage',
        'loadAverage' => 'LoadAverage',
        'cpuCFS'      => 'CpuCFS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuUsage) {
            $res['CpuUsage'] = null !== $this->cpuUsage ? $this->cpuUsage->toMap() : null;
        }
        if (null !== $this->loadAverage) {
            $res['LoadAverage'] = $this->loadAverage;
        }
        if (null !== $this->cpuCFS) {
            $res['CpuCFS'] = null !== $this->cpuCFS ? $this->cpuCFS->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cpuStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuUsage'])) {
            $model->cpuUsage = cpuUsage::fromMap($map['CpuUsage']);
        }
        if (isset($map['LoadAverage'])) {
            $model->loadAverage = $map['LoadAverage'];
        }
        if (isset($map['CpuCFS'])) {
            $model->cpuCFS = cpuCFS::fromMap($map['CpuCFS']);
        }

        return $model;
    }
}
