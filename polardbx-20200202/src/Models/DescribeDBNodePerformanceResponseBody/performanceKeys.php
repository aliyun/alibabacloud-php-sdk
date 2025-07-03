<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody\performanceKeys\performanceItem;

class performanceKeys extends Model
{
    /**
     * @var performanceItem[]
     */
    public $performanceItem;
    protected $_name = [
        'performanceItem' => 'PerformanceItem',
    ];

    public function validate()
    {
        if (\is_array($this->performanceItem)) {
            Model::validateArray($this->performanceItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->performanceItem) {
            if (\is_array($this->performanceItem)) {
                $res['PerformanceItem'] = [];
                $n1 = 0;
                foreach ($this->performanceItem as $item1) {
                    $res['PerformanceItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PerformanceItem'])) {
            if (!empty($map['PerformanceItem'])) {
                $model->performanceItem = [];
                $n1 = 0;
                foreach ($map['PerformanceItem'] as $item1) {
                    $model->performanceItem[$n1] = performanceItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
