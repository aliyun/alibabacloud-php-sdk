<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceManagerResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource type. Valid values:
     *
     *   If you set the ResourceType parameter to project, set this parameter to the value of ProjectIdentifier. You can call the [ListProjects](~~178393~~) operation to obtain the value of ProjectIdentifier.
     *   If you set the ResourceType parameter to tenantresourcegroup, set this parameter to the value of ResourceGroupType. You can call the [ListResourceGroups](~~173913~~) operation to obtain the value of ResourceGroupType. Only the values 7, 8, and 9 are valid.
     *
     * @example test_project
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the new resource group.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The resource type. Valid values:
     *
     *   project: workspace. If you want to modify the resource group that you specify when you activate DataWorks, set the value to project.
     *   tenantresourcegroup: exclusive resource group. If you want to modify the resource group that you specify when you purchase a DataWorks exclusive resource group, set the value to tenantresourcegroup.
     *
     * @example project
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceId'                     => 'ResourceId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceType'                   => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceManagerResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
