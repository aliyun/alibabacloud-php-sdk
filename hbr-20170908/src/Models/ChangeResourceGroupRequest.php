<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the new resource group. You can view the available resource groups in the Resource Management console.
     *
     * This parameter is required.
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The ID of the resource. The value of this parameter varies with the resource type. For example, if the ResourceType parameter is set to vault, the ResourceId parameter specifies the ID of the backup vault.
     *
     * This parameter is required.
     * @example v-0002vido6j5zyh5k****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. Valid values:
     *
     *   **vault**: backup vault
     *   **client**: backup client
     *   **hanainstance**: SAP HANA instance
     *
     * This parameter is required.
     * @example vault
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'newResourceGroupId' => 'NewResourceGroupId',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
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
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
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
