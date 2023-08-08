<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @example ***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ["xxxxx","xxxxxx"]
     *
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @example CLUSTER
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example [{\"key\":\"env\",\"value\",\"dev\"},{\"key\":\"dev\", \"value\":\"IT\"}]
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'nextToken'         => 'next_token',
        'regionId'          => 'region_id',
        'resourceIdsShrink' => 'resource_ids',
        'resourceType'      => 'resource_type',
        'tagsShrink'        => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceIdsShrink) {
            $res['resource_ids'] = $this->resourceIdsShrink;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_ids'])) {
            $model->resourceIdsShrink = $map['resource_ids'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
