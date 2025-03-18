<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceAttributeResponseBody extends Model
{
    /**
     * @description The queried instance.
     *
     * @var items
     */
    public $items;

    /**
     * @description Request ID.
     *
     * @example 5E6EDEB8-D73E-5F2D-B948-86C8AEB05A68
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'items' => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
