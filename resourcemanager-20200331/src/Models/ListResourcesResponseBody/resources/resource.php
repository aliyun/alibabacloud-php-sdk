<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourcesResponseBody\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The time when the resource was created. The time is displayed in UTC.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-uPJpP****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the resource.
     *
     * @example i-23v38****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the Alibaba Cloud service.
     *
     * @example ecs
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'createDate'      => 'CreateDate',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'service'         => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
