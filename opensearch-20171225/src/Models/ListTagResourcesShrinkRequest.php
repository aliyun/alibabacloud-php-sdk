<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @description The token that is used to retrieve the next page.
     *
     * @example 60
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource IDs. You can specify a maximum number of 50 resource IDs.
     *
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @description The resource type.
     *
     * @example BIGDATA
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags. You can specify a maximum number of 20 tags.
     *
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'nextToken'        => 'nextToken',
        'resourceIdShrink' => 'resourceId',
        'resourceType'     => 'resourceType',
        'tagShrink'        => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceIdShrink) {
            $res['resourceId'] = $this->resourceIdShrink;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tagShrink) {
            $res['tag'] = $this->tagShrink;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceIdShrink = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tag'])) {
            $model->tagShrink = $map['tag'];
        }

        return $model;
    }
}
