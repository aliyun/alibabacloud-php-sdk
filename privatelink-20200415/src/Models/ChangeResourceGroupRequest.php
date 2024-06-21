<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The resource group ID.
     *
     * This parameter is required.
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource IDs. You can specify up to 50 resource IDs.
     *
     * This parameter is required.
     * @example ep-hp3i05294c2d2d****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of resource. Valid values:
     *
     *   **VpcEndpoint**: endpoint
     *   **VpcEndpointService**: endpoint service
     *
     * @example VpcEndpoint
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
