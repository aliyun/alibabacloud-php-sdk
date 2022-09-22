<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsResponseBody\aggregations\aggregation;
use AlibabaCloud\Tea\Model;

class aggregations extends Model
{
    /**
     * @var aggregation[]
     */
    public $aggregation;
    protected $_name = [
        'aggregation' => 'Aggregation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregation) {
            $res['Aggregation'] = [];
            if (null !== $this->aggregation && \is_array($this->aggregation)) {
                $n = 0;
                foreach ($this->aggregation as $item) {
                    $res['Aggregation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregation'])) {
            if (!empty($map['Aggregation'])) {
                $model->aggregation = [];
                $n                  = 0;
                foreach ($map['Aggregation'] as $item) {
                    $model->aggregation[$n++] = null !== $item ? aggregation::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
