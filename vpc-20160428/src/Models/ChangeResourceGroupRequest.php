<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the new resource group.
     *
     * This parameter is required.
     * @example rg-bp1drpcfz9srr393h****
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The ID of the region to which the new resource group belongs.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Express Connect circuit whose resource group you want to modify.
     *
     * This parameter is required.
     * @example pc-bp16qjewdsunr41m1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   **PHYSICALCONNECTION**: Express Connect circuit.
     *   **VIRTUALBORDERROUTER**: virtual border router (VBR).
     *   **ROUTERINTERFACE**: router interface.
     *
     * This parameter is required.
     * @example PHYSICALCONNECTION
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'newResourceGroupId' => 'NewResourceGroupId',
        'regionId'           => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
