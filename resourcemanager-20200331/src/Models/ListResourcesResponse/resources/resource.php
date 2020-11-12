<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourcesResponse\resources;

use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'service'         => 'Service',
        'resourceType'    => 'ResourceType',
        'resourceId'      => 'ResourceId',
        'regionId'        => 'RegionId',
        'createDate'      => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('service', $this->service, true);
        Model::validateRequired('resourceType', $this->resourceType, true);
        Model::validateRequired('resourceId', $this->resourceId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
