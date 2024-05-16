<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceManagerResourceGroupRequest extends Model
{
    /**
     * @description The ID of the new resource group.
     *
     * This parameter is required.
     * @example test_project
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Indicates whether the resource group was successfully modified.
     *
     * This parameter is required.
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The ID of the resource type. Valid values:
     *
     *   If you set the ResourceType parameter to project, set this parameter to the value of ProjectIdentifier. You can call the [ListProjects](https://help.aliyun.com/document_detail/178393.html) operation to obtain the value of ProjectIdentifier.
     *   If you set the ResourceType parameter to tenantresourcegroup, set this parameter to the value of ResourceGroupType. You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/173913.html) operation to obtain the value of ResourceGroupType. Only the values 7, 8, and 9 are valid.
     *
     * This parameter is required.
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
