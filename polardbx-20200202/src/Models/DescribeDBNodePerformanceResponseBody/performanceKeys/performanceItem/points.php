<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody\performanceKeys\performanceItem;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody\performanceKeys\performanceItem\points\performanceItemValue;
use AlibabaCloud\Tea\Model;

class points extends Model
{
    /**
     * @var performanceItemValue[]
     */
    public $performanceItemValue;
    protected $_name = [
        'performanceItemValue' => 'PerformanceItemValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceItemValue) {
            $res['PerformanceItemValue'] = [];
            if (null !== $this->performanceItemValue && \is_array($this->performanceItemValue)) {
                $n = 0;
                foreach ($this->performanceItemValue as $item) {
                    $res['PerformanceItemValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return points
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerformanceItemValue'])) {
            if (!empty($map['PerformanceItemValue'])) {
                $model->performanceItemValue = [];
                $n                           = 0;
                foreach ($map['PerformanceItemValue'] as $item) {
                    $model->performanceItemValue[$n++] = null !== $item ? performanceItemValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
