<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\featureViews\usageStatistics\readWriteCount;

class usageStatistics extends Model
{
    /**
     * @var float
     */
    public $diskUsage;

    /**
     * @var float
     */
    public $memoryUsage;

    /**
     * @var readWriteCount[]
     */
    public $readWriteCount;

    /**
     * @var int
     */
    public $rowCount;
    protected $_name = [
        'diskUsage' => 'DiskUsage',
        'memoryUsage' => 'MemoryUsage',
        'readWriteCount' => 'ReadWriteCount',
        'rowCount' => 'RowCount',
    ];

    public function validate()
    {
        if (\is_array($this->readWriteCount)) {
            Model::validateArray($this->readWriteCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }

        if (null !== $this->memoryUsage) {
            $res['MemoryUsage'] = $this->memoryUsage;
        }

        if (null !== $this->readWriteCount) {
            if (\is_array($this->readWriteCount)) {
                $res['ReadWriteCount'] = [];
                $n1 = 0;
                foreach ($this->readWriteCount as $item1) {
                    $res['ReadWriteCount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
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
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }

        if (isset($map['MemoryUsage'])) {
            $model->memoryUsage = $map['MemoryUsage'];
        }

        if (isset($map['ReadWriteCount'])) {
            if (!empty($map['ReadWriteCount'])) {
                $model->readWriteCount = [];
                $n1 = 0;
                foreach ($map['ReadWriteCount'] as $item1) {
                    $model->readWriteCount[$n1++] = readWriteCount::fromMap($item1);
                }
            }
        }

        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }

        return $model;
    }
}
