<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @description 集群ID列表。
     *
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @description 资源类型，只支持Cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 地域ID
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 按标签查找。
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description 下一次查询Token。
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'resourceIdsShrink' => 'resource_ids',
        'resourceType'      => 'resource_type',
        'regionId'          => 'region_id',
        'tagsShrink'        => 'tags',
        'nextToken'         => 'next_token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIdsShrink) {
            $res['resource_ids'] = $this->resourceIdsShrink;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
        }
        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resource_ids'])) {
            $model->resourceIdsShrink = $map['resource_ids'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }
        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }

        return $model;
    }
}
