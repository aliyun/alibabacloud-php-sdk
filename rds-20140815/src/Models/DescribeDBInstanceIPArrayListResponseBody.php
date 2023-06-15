<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceIPArrayListResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceIPArrayListResponseBody extends Model
{
    /**
     * @description An array that consists of the details of the IP address whitelists.
     *
     * @var items
     */
    public $items;

    /**
     * @description The ID of the request.
     *
     * @example E2B6AF71-DC32-4055-B477-43B348798D10
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'items'     => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return DescribeDBInstanceIPArrayListResponseBody
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
