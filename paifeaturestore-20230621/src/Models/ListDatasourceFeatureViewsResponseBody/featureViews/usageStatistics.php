<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews\usageStatistics\readWriteCount;
use AlibabaCloud\Tea\Model;

class usageStatistics extends Model
{
    /**
     * @example 1.23
     *
     * @var float
     */
    public $diskUsage;

    /**
     * @example 0.12
     *
     * @var float
     */
    public $memoryUsage;

    /**
     * @var readWriteCount[]
     */
    public $readWriteCount;

    /**
     * @example 10000
     *
     * @var int
     */
    public $rowCount;
    protected $_name = [
        'diskUsage' => 'DiskUsage',
        'memoryUsage' => 'MemoryUsage',
        'readWriteCount' => 'ReadWriteCount',
        'rowCount' => 'RowCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->memoryUsage) {
            $res['MemoryUsage'] = $this->memoryUsage;
        }
        if (null !== $this->readWriteCount) {
            $res['ReadWriteCount'] = [];
            if (null !== $this->readWriteCount && \is_array($this->readWriteCount)) {
                $n = 0;
                foreach ($this->readWriteCount as $item) {
                    $res['ReadWriteCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['MemoryUsage'])) {
            $model->memoryUsage = $map['MemoryUsage'];
        }
        if (isset($map['ReadWriteCount'])) {
            if (!empty($map['ReadWriteCount'])) {
                $model->readWriteCount = [];
                $n = 0;
                foreach ($map['ReadWriteCount'] as $item) {
                    $model->readWriteCount[$n++] = null !== $item ? readWriteCount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        return $model;
    }
}
