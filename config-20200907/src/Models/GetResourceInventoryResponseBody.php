<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceInventoryResponseBody\resourceInventory;
use AlibabaCloud\Tea\Model;

class GetResourceInventoryResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 89E2F38F-4EE4-545A-BD56-92E007ECFEE9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the resource inventory.
     *
     * @var resourceInventory
     */
    public $resourceInventory;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceInventory' => 'ResourceInventory',
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
        if (null !== $this->resourceInventory) {
            $res['ResourceInventory'] = null !== $this->resourceInventory ? $this->resourceInventory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceInventoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceInventory'])) {
            $model->resourceInventory = resourceInventory::fromMap($map['ResourceInventory']);
        }

        return $model;
    }
}
