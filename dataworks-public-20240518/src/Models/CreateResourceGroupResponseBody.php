<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceGroupResponseBody\resourceGroupOrder;
use AlibabaCloud\Tea\Model;

class CreateResourceGroupResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 6A6CBE87-9F91-1323-B680-E7A7065XXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the order that is used to create the serverless resource group.
     *
     * @var resourceGroupOrder
     */
    public $resourceGroupOrder;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceGroupOrder' => 'ResourceGroupOrder',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupOrder) {
            $res['ResourceGroupOrder'] = null !== $this->resourceGroupOrder ? $this->resourceGroupOrder->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupOrder'])) {
            $model->resourceGroupOrder = resourceGroupOrder::fromMap($map['ResourceGroupOrder']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
