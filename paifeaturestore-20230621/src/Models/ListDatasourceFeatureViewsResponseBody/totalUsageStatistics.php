<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListDatasourceFeatureViewsResponseBody\totalUsageStatistics\totalReadWriteCount;

class totalUsageStatistics extends Model
{
    /**
     * @var float
     */
    public $totalDiskUsage;

    /**
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

    public function validate()
    {
        if (\is_array($this->totalReadWriteCount)) {
            Model::validateArray($this->totalReadWriteCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalDiskUsage) {
            $res['TotalDiskUsage'] = $this->totalDiskUsage;
        }

        if (null !== $this->totalMemoryUsage) {
            $res['TotalMemoryUsage'] = $this->totalMemoryUsage;
        }

        if (null !== $this->totalReadWriteCount) {
            if (\is_array($this->totalReadWriteCount)) {
                $res['TotalReadWriteCount'] = [];
                $n1 = 0;
                foreach ($this->totalReadWriteCount as $item1) {
                    $res['TotalReadWriteCount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['TotalDiskUsage'])) {
            $model->totalDiskUsage = $map['TotalDiskUsage'];
        }

        if (isset($map['TotalMemoryUsage'])) {
            $model->totalMemoryUsage = $map['TotalMemoryUsage'];
        }

        if (isset($map['TotalReadWriteCount'])) {
            if (!empty($map['TotalReadWriteCount'])) {
                $model->totalReadWriteCount = [];
                $n1 = 0;
                foreach ($map['TotalReadWriteCount'] as $item1) {
                    $model->totalReadWriteCount[$n1++] = totalReadWriteCount::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
