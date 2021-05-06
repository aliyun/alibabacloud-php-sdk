<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody\performances;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody\performances\resourcePoolPerformances\resourcePoolSeries;
use AlibabaCloud\Tea\Model;

class resourcePoolPerformances extends Model
{
    /**
     * @var string
     */
    public $resourcePoolName;

    /**
     * @var resourcePoolSeries[]
     */
    public $resourcePoolSeries;
    protected $_name = [
        'resourcePoolName'   => 'ResourcePoolName',
        'resourcePoolSeries' => 'ResourcePoolSeries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }
        if (null !== $this->resourcePoolSeries) {
            $res['ResourcePoolSeries'] = [];
            if (null !== $this->resourcePoolSeries && \is_array($this->resourcePoolSeries)) {
                $n = 0;
                foreach ($this->resourcePoolSeries as $item) {
                    $res['ResourcePoolSeries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePoolPerformances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }
        if (isset($map['ResourcePoolSeries'])) {
            if (!empty($map['ResourcePoolSeries'])) {
                $model->resourcePoolSeries = [];
                $n                         = 0;
                foreach ($map['ResourcePoolSeries'] as $item) {
                    $model->resourcePoolSeries[$n++] = null !== $item ? resourcePoolSeries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
