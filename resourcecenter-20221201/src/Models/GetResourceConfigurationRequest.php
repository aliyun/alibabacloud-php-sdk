<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class GetResourceConfigurationRequest extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example eip-bp1kyg72m****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of the resource.
     *
     * For more information about the resource types supported by Resource Center, see [Services that work with Resource Center](~~477798~~).
     * @example ACS::VPC::RouteTable
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceId'       => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType'     => 'ResourceType',
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
     * @return GetResourceConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
