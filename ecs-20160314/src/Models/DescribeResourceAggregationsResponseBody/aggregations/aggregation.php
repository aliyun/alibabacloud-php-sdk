<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceAggregationsResponseBody\aggregations;

use AlibabaCloud\Tea\Model;

class aggregation extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $keys;
    protected $_name = [
        'count' => 'Count',
        'keys'  => 'Keys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Keys'])) {
            $model->keys = $map['Keys'];
        }

        return $model;
    }
}
