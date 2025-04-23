<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

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
    public $resourceIdShrink;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'nextToken' => 'nextToken',
        'resourceIdShrink' => 'resourceId',
        'resourceType' => 'resourceType',
        'tagShrink' => 'tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
