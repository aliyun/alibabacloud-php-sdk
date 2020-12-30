<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\memoryStats\containerData;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerStats\memoryStats\hierarchicalData;
use AlibabaCloud\Tea\Model;

class memoryStats extends Model
{
    /**
     * @var int
     */
    public $failCnt;

    /**
     * @var int
     */
    public $maxUsage;

    /**
     * @var hierarchicalData
     */
    public $hierarchicalData;

    /**
     * @var int
     */
    public $rss;

    /**
     * @var containerData
     */
    public $containerData;

    /**
     * @var int
     */
    public $workingSet;

    /**
     * @var int
     */
    public $swap;

    /**
     * @var int
     */
    public $cache;

    /**
     * @var int
     */
    public $usage;
    protected $_name = [
        'failCnt'          => 'FailCnt',
        'maxUsage'         => 'MaxUsage',
        'hierarchicalData' => 'HierarchicalData',
        'rss'              => 'Rss',
        'containerData'    => 'ContainerData',
        'workingSet'       => 'WorkingSet',
        'swap'             => 'Swap',
        'cache'            => 'Cache',
        'usage'            => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCnt) {
            $res['FailCnt'] = $this->failCnt;
        }
        if (null !== $this->maxUsage) {
            $res['MaxUsage'] = $this->maxUsage;
        }
        if (null !== $this->hierarchicalData) {
            $res['HierarchicalData'] = null !== $this->hierarchicalData ? $this->hierarchicalData->toMap() : null;
        }
        if (null !== $this->rss) {
            $res['Rss'] = $this->rss;
        }
        if (null !== $this->containerData) {
            $res['ContainerData'] = null !== $this->containerData ? $this->containerData->toMap() : null;
        }
        if (null !== $this->workingSet) {
            $res['WorkingSet'] = $this->workingSet;
        }
        if (null !== $this->swap) {
            $res['Swap'] = $this->swap;
        }
        if (null !== $this->cache) {
            $res['Cache'] = $this->cache;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memoryStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailCnt'])) {
            $model->failCnt = $map['FailCnt'];
        }
        if (isset($map['MaxUsage'])) {
            $model->maxUsage = $map['MaxUsage'];
        }
        if (isset($map['HierarchicalData'])) {
            $model->hierarchicalData = hierarchicalData::fromMap($map['HierarchicalData']);
        }
        if (isset($map['Rss'])) {
            $model->rss = $map['Rss'];
        }
        if (isset($map['ContainerData'])) {
            $model->containerData = containerData::fromMap($map['ContainerData']);
        }
        if (isset($map['WorkingSet'])) {
            $model->workingSet = $map['WorkingSet'];
        }
        if (isset($map['Swap'])) {
            $model->swap = $map['Swap'];
        }
        if (isset($map['Cache'])) {
            $model->cache = $map['Cache'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
