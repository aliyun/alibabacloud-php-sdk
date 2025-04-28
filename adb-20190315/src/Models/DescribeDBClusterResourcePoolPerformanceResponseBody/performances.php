<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterResourcePoolPerformanceResponseBody\performances\resourcePoolPerformances;

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
        'key' => 'Key',
        'resourcePoolPerformances' => 'ResourcePoolPerformances',
        'unit' => 'Unit',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePoolPerformances)) {
            Model::validateArray($this->resourcePoolPerformances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->resourcePoolPerformances) {
            if (\is_array($this->resourcePoolPerformances)) {
                $res['ResourcePoolPerformances'] = [];
                $n1 = 0;
                foreach ($this->resourcePoolPerformances as $item1) {
                    $res['ResourcePoolPerformances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['ResourcePoolPerformances'])) {
            if (!empty($map['ResourcePoolPerformances'])) {
                $model->resourcePoolPerformances = [];
                $n1 = 0;
                foreach ($map['ResourcePoolPerformances'] as $item1) {
                    $model->resourcePoolPerformances[$n1++] = resourcePoolPerformances::fromMap($item1);
                }
            }
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
