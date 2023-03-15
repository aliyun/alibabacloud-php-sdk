<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner;

use AlibabaCloud\Tea\Model;

class supportedResourceTypes extends Model
{
    /**
     * @description The resource type that can be cleaned up.
     *
     * @example ECS:Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The names of the side effects. The StopInstance value indicates that an instance that is related to the specified resource is stopped.
     *
     * @var string[]
     */
    public $sideEffects;

    /**
     * @description The filters that are used to filter resources. Valid values:
     *
     *   RegionId: the ID of the region.
     *   ResourceId: the ID of the resource.
     *   ResourceName: the name of the resource.
     *   Tags: the tags of the resource.
     *   ResourceGroupId: the ID of the resource group.
     *   DeletionProtection: the deletion protection feature.
     *
     * @var string[]
     */
    public $supportedFilters;
    protected $_name = [
        'resourceType'     => 'ResourceType',
        'sideEffects'      => 'SideEffects',
        'supportedFilters' => 'SupportedFilters',
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
        if (null !== $this->sideEffects) {
            $res['SideEffects'] = $this->sideEffects;
        }
        if (null !== $this->supportedFilters) {
            $res['SupportedFilters'] = $this->supportedFilters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedResourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SideEffects'])) {
            if (!empty($map['SideEffects'])) {
                $model->sideEffects = $map['SideEffects'];
            }
        }
        if (isset($map['SupportedFilters'])) {
            if (!empty($map['SupportedFilters'])) {
                $model->supportedFilters = $map['SupportedFilters'];
            }
        }

        return $model;
    }
}
