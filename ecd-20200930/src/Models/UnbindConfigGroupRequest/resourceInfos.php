<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\UnbindConfigGroupRequest;

use AlibabaCloud\Tea\Model;

class resourceInfos extends Model
{
    /**
     * @description The service type of the resource.
     *
     * Valid value:
     *
     *   CLOUD_DESKTOP: the cloud computer service.
     *
     * @example CLOUD_DESKTOP
     *
     * @var string
     */
    public $productType;

    /**
     * @description The ID of the resource.
     *
     * @example ecd-ctwj0bk3l5nz****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of the resource.
     *
     * Valid values:
     *
     *   RESOURCE_GROUP: the resource group.
     *   CLOUD_DESKTOP: the cloud computer service.
     *
     * @example CLOUD_DESKTOP
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'productType' => 'ProductType',
        'resourceId' => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
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
     * @return resourceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
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
