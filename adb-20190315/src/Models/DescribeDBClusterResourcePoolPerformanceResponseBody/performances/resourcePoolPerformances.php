<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody\performances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody\performances\resourcePoolPerformances\resourcePoolSeries;

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
        'resourcePoolName' => 'ResourcePoolName',
        'resourcePoolSeries' => 'ResourcePoolSeries',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePoolSeries)) {
            Model::validateArray($this->resourcePoolSeries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourcePoolName) {
            $res['ResourcePoolName'] = $this->resourcePoolName;
        }

        if (null !== $this->resourcePoolSeries) {
            if (\is_array($this->resourcePoolSeries)) {
                $res['ResourcePoolSeries'] = [];
                $n1 = 0;
                foreach ($this->resourcePoolSeries as $item1) {
                    $res['ResourcePoolSeries'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourcePoolName'])) {
            $model->resourcePoolName = $map['ResourcePoolName'];
        }

        if (isset($map['ResourcePoolSeries'])) {
            if (!empty($map['ResourcePoolSeries'])) {
                $model->resourcePoolSeries = [];
                $n1 = 0;
                foreach ($map['ResourcePoolSeries'] as $item1) {
                    $model->resourcePoolSeries[$n1++] = resourcePoolSeries::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
