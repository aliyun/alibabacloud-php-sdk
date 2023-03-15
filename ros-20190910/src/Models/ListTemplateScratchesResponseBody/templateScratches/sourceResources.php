<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListTemplateScratchesResponseBody\templateScratches;

use AlibabaCloud\Tea\Model;

class sourceResources extends Model
{
    /**
     * @description The ID of the resource.
     *
     * @example vpc-m5eauuq80anx59v28****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * @example ALIYUN::ECS::VPC
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
