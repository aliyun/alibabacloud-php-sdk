<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListResourcesRequest;

use AlibabaCloud\Tea\Model;

class resourceTypes extends Model
{
    /**
     * @description The resource type.
     *
     * Valid values of N: 1 to 50.
     *
     * For more information about the supported resource types, see the **Resource type** column in [Services that work with Resource Group](~~94479~~).
     *
     * >  You must configure both `Service` and `ResourceType` in `ResourceTypes`. Otherwise, the two parameters do not take effect.
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the Alibaba Cloud service.
     *
     * Valid values of N: 1 to 50.
     *
     * You can obtain the ID from the **Service code** column in [Services that work with Resource Group](~~94479~~).
     *
     * >  You must configure both `Service` and `ResourceType` in `ResourceTypes`. Otherwise, the two parameters do not take effect.
     * @example ecs
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'service'      => 'Service',
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
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
