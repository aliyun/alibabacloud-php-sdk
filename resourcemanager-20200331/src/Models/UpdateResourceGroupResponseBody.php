<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\UpdateResourceGroupResponseBody\resourceGroup;
use AlibabaCloud\Tea\Model;

class UpdateResourceGroupResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the resource group.
     *
     * @var resourceGroup
     */
    public $resourceGroup;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceGroup' => 'ResourceGroup',
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
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = null !== $this->resourceGroup ? $this->resourceGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = resourceGroup::fromMap($map['ResourceGroup']);
        }

        return $model;
    }
}
