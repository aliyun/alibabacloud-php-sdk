<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\TagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The region ID of the tags.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource IDs. You can add tags to up to 50 resources.
     *
     * This parameter is required.
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type. Valid values:
     *
     *   `ACS::Config::Rule`
     *   `ACS::Config::AggregateConfigRule`
     *   `ACS::Config::Aggregator`
     *   `ACS::Config::CompliancePack`
     *   `ACS::Config::AggregateCompliancePack`
     *
     * This parameter is required.
     * @example ACS::Config::Rule
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag value of the resource.
     *
     * This parameter is required.
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tag'          => 'Tag',
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
