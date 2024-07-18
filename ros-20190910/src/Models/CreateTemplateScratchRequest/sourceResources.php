<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\CreateTemplateScratchRequest;

use AlibabaCloud\Tea\Model;

class sourceResources extends Model
{
    /**
     * @description The region ID of the resource.
     *
     * >
     *
     *   This parameter takes effect only when TemplateScratchType is set to ArchitectureDetection.
     *
     *   The region ID of a global resource is `global`. For example, the region ID of the ALIYUN::CDN::Domain global resource is `global`.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The related resource type filters.
     *
     * @var string[]
     */
    public $relatedResourceTypeFilter;

    /**
     * @description The resource ID.
     *
     * This parameter is required.
     * @example vpc-bp1m6fww66xbntjyc****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * This parameter is required.
     * @example ALIYUN::ECS::VPC
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'regionId'                  => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
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
