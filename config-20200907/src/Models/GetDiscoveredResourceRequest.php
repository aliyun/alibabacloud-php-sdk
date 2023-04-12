<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceRequest extends Model
{
    /**
     * @description The ID of the region in which the resource resides.
     *
     * For more information about how to query the region ID of a resource, see [ListDiscoveredResources](~~411702~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource.
     *
     * For more information about how to query the ID of a resource, see [ListDiscoveredResources](~~411702~~).
     * @example new-bucket
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * For more information about how to query the type of a resource, see [ListDiscoveredResources](~~411702~~).
     * @example ACS::OSS::Bucket
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'region'       => 'Region',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
     * @return GetDiscoveredResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
