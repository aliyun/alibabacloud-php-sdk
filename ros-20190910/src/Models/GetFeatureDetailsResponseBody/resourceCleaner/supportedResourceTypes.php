<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetFeatureDetailsResponseBody\resourceCleaner;

use AlibabaCloud\Tea\Model;

class supportedResourceTypes extends Model
{
    /**
     * @example ECS:Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $sideEffects;

    /**
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
