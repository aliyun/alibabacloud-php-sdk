<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @description The IDs of the resources for which you want to query tags. You must specify at least one of resourceId and tags.
     *
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @description The type of the resource. Set the value to project.
     *
     * This parameter is required.
     * @example project
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags that you want to use to filter resources based on exact match. Each tag is a key-value pair. You must specify at least one of resourceId and tags.
     *
     * You can enter up to 20 tags.
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'resourceIdShrink' => 'resourceId',
        'resourceType'     => 'resourceType',
        'tagsShrink'       => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceIdShrink) {
            $res['resourceId'] = $this->resourceIdShrink;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
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
        if (isset($map['resourceId'])) {
            $model->resourceIdShrink = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
