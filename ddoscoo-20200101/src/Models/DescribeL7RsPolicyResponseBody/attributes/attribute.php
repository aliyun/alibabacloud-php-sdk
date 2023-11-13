<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7RsPolicyResponseBody\attributes;

use AlibabaCloud\Tea\Model;

class attribute extends Model
{
    /**
     * @description The weight of the origin server. This parameter takes effect only when **ProxyMode** is set to **rr**.
     *
     * Valid values: **1** to **100**. Default value: **100**. A server with a higher weight receives more requests.
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'weight' => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
