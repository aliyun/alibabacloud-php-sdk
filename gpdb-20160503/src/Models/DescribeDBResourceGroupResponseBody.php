<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems;
use AlibabaCloud\Tea\Model;

class DescribeDBResourceGroupResponseBody extends Model
{
    /**
     * @example ABB39CC3-4488-4857-905D-2E4A051D0521
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceGroupItems
     */
    public $resourceGroupItems;
    protected $_name = [
        'requestId'          => 'RequestId',
        'resourceGroupItems' => 'ResourceGroupItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupItems) {
            $res['ResourceGroupItems'] = null !== $this->resourceGroupItems ? $this->resourceGroupItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupItems'])) {
            $model->resourceGroupItems = resourceGroupItems::fromMap($map['ResourceGroupItems']);
        }

        return $model;
    }
}
