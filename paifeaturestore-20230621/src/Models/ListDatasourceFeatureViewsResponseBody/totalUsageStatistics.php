<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\totalUsageStatistics\totalReadWriteCount;
use AlibabaCloud\Tea\Model;

class totalUsageStatistics extends Model
{
    /**
     * @example 12.3
     *
     * @var float
     */
    public $totalDiskUsage;

    /**
     * @example 1.23
     *
     * @var float
     */
    public $totalMemoryUsage;

    /**
     * @var totalReadWriteCount[]
     */
    public $totalReadWriteCount;
    protected $_name = [
        'totalDiskUsage' => 'TotalDiskUsage',
        'totalMemoryUsage' => 'TotalMemoryUsage',
        'totalReadWriteCount' => 'TotalReadWriteCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalDiskUsage) {
            $res['TotalDiskUsage'] = $this->totalDiskUsage;
        }
        if (null !== $this->totalMemoryUsage) {
            $res['TotalMemoryUsage'] = $this->totalMemoryUsage;
        }
        if (null !== $this->totalReadWriteCount) {
            $res['TotalReadWriteCount'] = [];
            if (null !== $this->totalReadWriteCount && \is_array($this->totalReadWriteCount)) {
                $n = 0;
                foreach ($this->totalReadWriteCount as $item) {
                    $res['TotalReadWriteCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return totalUsageStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalDiskUsage'])) {
            $model->totalDiskUsage = $map['TotalDiskUsage'];
        }
        if (isset($map['TotalMemoryUsage'])) {
            $model->totalMemoryUsage = $map['TotalMemoryUsage'];
        }
        if (isset($map['TotalReadWriteCount'])) {
            if (!empty($map['TotalReadWriteCount'])) {
                $model->totalReadWriteCount = [];
                $n = 0;
                foreach ($map['TotalReadWriteCount'] as $item) {
                    $model->totalReadWriteCount[$n++] = null !== $item ? totalReadWriteCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
