<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody\performanceKeys\performanceItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody\performanceKeys\performanceItem\points\performanceItemValue;

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
        if (\is_array($this->performanceItemValue)) {
            Model::validateArray($this->performanceItemValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->performanceItemValue) {
            if (\is_array($this->performanceItemValue)) {
                $res['PerformanceItemValue'] = [];
                $n1 = 0;
                foreach ($this->performanceItemValue as $item1) {
                    $res['PerformanceItemValue'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['PerformanceItemValue'])) {
            if (!empty($map['PerformanceItemValue'])) {
                $model->performanceItemValue = [];
                $n1 = 0;
                foreach ($map['PerformanceItemValue'] as $item1) {
                    $model->performanceItemValue[$n1] = performanceItemValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
