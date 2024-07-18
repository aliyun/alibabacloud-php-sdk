<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateScratchResponseBody\templateScratch;

use AlibabaCloud\Tea\Model;

class sourceResources extends Model
{
    /**
     * @description The related resource type filters.
     *
     * @var string[]
     */
    public $relatedResourceTypeFilter;

    /**
     * @description The resource ID.
     *
     * @example vpc-m5e7cv7e9mz69sszb****
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
        'relatedResourceTypeFilter' => 'RelatedResourceTypeFilter',
        'resourceId'                => 'ResourceId',
        'resourceType'              => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedResourceTypeFilter) {
            $res['RelatedResourceTypeFilter'] = $this->relatedResourceTypeFilter;
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
     * @return sourceResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelatedResourceTypeFilter'])) {
            if (!empty($map['RelatedResourceTypeFilter'])) {
                $model->relatedResourceTypeFilter = $map['RelatedResourceTypeFilter'];
            }
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
