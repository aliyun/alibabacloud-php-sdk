<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class ListTagResourcesShrinkRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @example MTIzNCNhYmM=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceIdShrink;

    /**
     * @example ALIYUN::FC:FUNCTION
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'limit'            => 'Limit',
        'nextToken'        => 'NextToken',
        'resourceIdShrink' => 'ResourceId',
        'resourceType'     => 'ResourceType',
        'tagShrink'        => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceIdShrink) {
            $res['ResourceId'] = $this->resourceIdShrink;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceIdShrink = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
