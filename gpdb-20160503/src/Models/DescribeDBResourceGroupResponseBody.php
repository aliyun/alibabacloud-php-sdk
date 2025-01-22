<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBResourceGroupResponseBody\resourceGroupItems;

class DescribeDBResourceGroupResponseBody extends Model
{
    /**
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
        if (null !== $this->resourceGroupItems) {
            $this->resourceGroupItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupItems) {
            $res['ResourceGroupItems'] = null !== $this->resourceGroupItems ? $this->resourceGroupItems->toArray($noStream) : $this->resourceGroupItems;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupItems'])) {
            $model->resourceGroupItems = resourceGroupItems::fromMap($map['ResourceGroupItems']);
        }

        return $model;
    }
}
