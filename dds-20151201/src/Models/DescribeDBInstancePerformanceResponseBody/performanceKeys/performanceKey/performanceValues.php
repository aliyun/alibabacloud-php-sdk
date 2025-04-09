<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancePerformanceResponseBody\performanceKeys\performanceKey\performanceValues\performanceValue;

class performanceValues extends Model
{
    /**
     * @var performanceValue[]
     */
    public $performanceValue;
    protected $_name = [
        'performanceValue' => 'PerformanceValue',
    ];

    public function validate()
    {
        if (\is_array($this->performanceValue)) {
            Model::validateArray($this->performanceValue);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->performanceValue) {
            if (\is_array($this->performanceValue)) {
                $res['PerformanceValue'] = [];
                $n1 = 0;
                foreach ($this->performanceValue as $item1) {
                    $res['PerformanceValue'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PerformanceValue'])) {
            if (!empty($map['PerformanceValue'])) {
                $model->performanceValue = [];
                $n1 = 0;
                foreach ($map['PerformanceValue'] as $item1) {
                    $model->performanceValue[$n1++] = performanceValue::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
