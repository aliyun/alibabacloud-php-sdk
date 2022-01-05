<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody\performances\resourcePoolPerformances;
use AlibabaCloud\Tea\Model;

class performances extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var resourcePoolPerformances[]
     */
    public $resourcePoolPerformances;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'key'                      => 'Key',
        'resourcePoolPerformances' => 'ResourcePoolPerformances',
        'unit'                     => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->resourcePoolPerformances) {
            $res['ResourcePoolPerformances'] = [];
            if (null !== $this->resourcePoolPerformances && \is_array($this->resourcePoolPerformances)) {
                $n = 0;
                foreach ($this->resourcePoolPerformances as $item) {
                    $res['ResourcePoolPerformances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ResourcePoolPerformances'])) {
            if (!empty($map['ResourcePoolPerformances'])) {
                $model->resourcePoolPerformances = [];
                $n                               = 0;
                foreach ($map['ResourcePoolPerformances'] as $item) {
                    $model->resourcePoolPerformances[$n++] = null !== $item ? resourcePoolPerformances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
