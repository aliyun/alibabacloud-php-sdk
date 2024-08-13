<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to remove all tags from the instances. Default value: No.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The ID of the region in which the instances reside.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IDs of the instances. Valid values of N: 0 to 49. You can specify up to 50 instances at a time. Example: ResourceId.0, ResourceId.1, ... , ResourceId.49.
     *
     * This parameter is required.
     * @example ddosbgp-cn-v0h1fmwbc024
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The resource type. Set the value to **INSTANCE**.
     *
     * This parameter is required.
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The keys of the tag that you want to remove. Valid values of N: 0 to 19. You can specify up to 20 tag keys at a time. Example: Tag.0.Key, Tag.1.Key, ... , Tag.19.Key.
     *
     * @example testKey1
     *
     * @var string[]
     */
    public $tagKey;
    protected $_name = [
        'all'             => 'All',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'tagKey'          => 'TagKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
