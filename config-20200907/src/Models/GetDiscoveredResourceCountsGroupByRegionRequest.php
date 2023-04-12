<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceCountsGroupByRegionRequest extends Model
{
    /**
     * @description The type of the resource.
     *
     * For more information about how to query the type of a resource, see [ListDiscoveredResources](~~169620~~).
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceCountsGroupByRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
