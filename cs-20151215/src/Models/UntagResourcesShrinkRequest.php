<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UntagResourcesShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $all;
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
    public $tagKeysShrink;
    protected $_name = [
        'all'               => 'all',
        'regionId'          => 'region_id',
        'resourceIdsShrink' => 'resource_ids',
        'resourceType'      => 'resource_type',
        'tagKeysShrink'     => 'tag_keys',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
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

        if (null !== $this->tagKeysShrink) {
            $res['tag_keys'] = $this->tagKeysShrink;
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
        if (isset($map['all'])) {
            $model->all = $map['all'];
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

        if (isset($map['tag_keys'])) {
            $model->tagKeysShrink = $map['tag_keys'];
        }

        return $model;
    }
}
