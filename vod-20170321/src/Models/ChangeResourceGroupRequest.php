<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource group.
     *
     * This parameter is required.
     *
     * @example rg-aekzko7fsuj****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of resource
     *
     * This parameter is required.
     *
     * @example app-xxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of resource
     *
     * @example AppInfo
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId' => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
