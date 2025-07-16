<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBNodePerformanceResponseBody\performanceKeys\performanceItem;
use AlibabaCloud\Tea\Model;

class performanceKeys extends Model
{
    /**
     * @var performanceItem[]
     */
    public $performanceItem;
    protected $_name = [
        'performanceItem' => 'PerformanceItem',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceItem) {
            $res['PerformanceItem'] = [];
            if (null !== $this->performanceItem && \is_array($this->performanceItem)) {
                $n = 0;
                foreach ($this->performanceItem as $item) {
                    $res['PerformanceItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerformanceItem'])) {
            if (!empty($map['PerformanceItem'])) {
                $model->performanceItem = [];
                $n = 0;
                foreach ($map['PerformanceItem'] as $item) {
                    $model->performanceItem[$n++] = null !== $item ? performanceItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
