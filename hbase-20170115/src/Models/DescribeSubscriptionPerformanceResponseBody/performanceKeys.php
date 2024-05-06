<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceResponseBody;

use AlibabaCloud\SDK\HBase\V20170115\Models\DescribeSubscriptionPerformanceResponseBody\performanceKeys\performanceKey;
use AlibabaCloud\Tea\Model;

class performanceKeys extends Model
{
    /**
     * @var performanceKey[]
     */
    public $performanceKey;
    protected $_name = [
        'performanceKey' => 'PerformanceKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->performanceKey) {
            $res['PerformanceKey'] = [];
            if (null !== $this->performanceKey && \is_array($this->performanceKey)) {
                $n = 0;
                foreach ($this->performanceKey as $item) {
                    $res['PerformanceKey'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PerformanceKey'])) {
            if (!empty($map['PerformanceKey'])) {
                $model->performanceKey = [];
                $n                     = 0;
                foreach ($map['PerformanceKey'] as $item) {
                    $model->performanceKey[$n++] = null !== $item ? performanceKey::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
