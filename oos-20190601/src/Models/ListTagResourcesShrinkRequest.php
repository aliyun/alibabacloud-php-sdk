<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

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
        'nextToken'         => 'NextToken',
        'regionId'          => 'RegionId',
        'resourceIdsShrink' => 'ResourceIds',
        'resourceType'      => 'ResourceType',
        'tagsShrink'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceIdsShrink) {
            $res['ResourceIds'] = $this->resourceIdsShrink;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIdsShrink = $map['ResourceIds'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
