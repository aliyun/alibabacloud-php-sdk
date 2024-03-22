<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @example function
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tagKeyShrink;
    protected $_name = [
        'all'              => 'All',
        'resourceIdShrink' => 'ResourceId',
        'resourceType'     => 'ResourceType',
        'tagKeyShrink'     => 'TagKey',
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
        if (null !== $this->resourceIdShrink) {
            $res['ResourceId'] = $this->resourceIdShrink;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKeyShrink) {
            $res['TagKey'] = $this->tagKeyShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceIdShrink = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKeyShrink = $map['TagKey'];
        }

        return $model;
    }
}
