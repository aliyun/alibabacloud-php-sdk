<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceIdsShrink;
    /**
     * @var string
     */
    public $resourceType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
