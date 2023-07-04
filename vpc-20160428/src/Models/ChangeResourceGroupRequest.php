<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the new resource group.
     *
     * >  You can use resource groups to manage resources owned by your Alibaba Cloud account. Resource groups simplify the resource and permission management of your Alibaba Cloud account. For more information, see [What is resource management?](~~94475~~).
     * @example rg-bp1drpcfz9srr393h****
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The region ID of the resource group.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query available regions.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Express Connect circuit.
     *
     * @example pc-bp16qjewdsunr41m1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. Set the value to **PHYSICALCONNECTION**, which specifies an Express Connect circuit.
     *
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
