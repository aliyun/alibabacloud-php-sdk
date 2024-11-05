<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class TagResourcesRequest extends Model
{
    /**
     * @description The ID of the region in which the resource resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of resource IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of resources that you want to label. Valid value: `CLUSTER`.
     *
     * This parameter is required.
     * @example CLUSTER
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags that you want to add to the resources in key-value pairs. You can add up to 20 key-value pairs. Note:
     *
     *   The values must not be empty strings. A value must be 1 to 128 characters in length.
     *   A key or value must not start with `aliyun` or `acs:`.
     *   A key or value must not contain `http://` or `https://`.
     *
     * This parameter is required.
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'regionId'     => 'region_id',
        'resourceIds'  => 'resource_ids',
        'resourceType' => 'resource_type',
        'tags'         => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceIds) {
            $res['resource_ids'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_ids'])) {
            if (!empty($map['resource_ids'])) {
                $model->resourceIds = $map['resource_ids'];
            }
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
