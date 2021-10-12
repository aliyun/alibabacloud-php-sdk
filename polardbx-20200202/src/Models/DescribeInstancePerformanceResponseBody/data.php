<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeInstancePerformanceResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeInstancePerformanceResponseBody\data\performanceItems;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var performanceItems[]
     */
    public $performanceItems;
    protected $_name = [
        'performanceItems' => 'PerformanceItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceItems) {
            $res['PerformanceItems'] = [];
            if (null !== $this->performanceItems && \is_array($this->performanceItems)) {
                $n = 0;
                foreach ($this->performanceItems as $item) {
                    $res['PerformanceItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerformanceItems'])) {
            if (!empty($map['PerformanceItems'])) {
                $model->performanceItems = [];
                $n                       = 0;
                foreach ($map['PerformanceItems'] as $item) {
                    $model->performanceItems[$n++] = null !== $item ? performanceItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
