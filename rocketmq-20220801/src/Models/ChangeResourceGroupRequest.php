<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance is changed.
     *
     * You can call the [ListResourceGroups](https://www.alibabacloud.com/help/resource-management/latest/listresourcegroups) operation to query existing resource groups.
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the resource. Set this parameter to the ID of the ApsaraMQ for RocketMQ instance whose resource group you want to change.
     *
     * @example c2c5d1274a8d4317a13bc5b0d4******
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of resource.
     *
     * Set this parameter to **instance**. The value of this parameter cannot be changed.
     * @example instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'regionId'        => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'resourceId'      => 'resourceId',
        'resourceType'    => 'resourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        return $model;
    }
}
