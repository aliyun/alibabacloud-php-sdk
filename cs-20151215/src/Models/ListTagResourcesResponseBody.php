<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources;

class ListTagResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagResources
     */
    public $tagResources;
    protected $_name = [
        'nextToken' => 'next_token',
        'requestId' => 'request_id',
        'tagResources' => 'tag_resources',
    ];

    public function validate()
    {
        if (null !== $this->tagResources) {
            $this->tagResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }

        if (null !== $this->tagResources) {
            $res['tag_resources'] = null !== $this->tagResources ? $this->tagResources->toArray($noStream) : $this->tagResources;
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

        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }

        if (isset($map['tag_resources'])) {
            $model->tagResources = tagResources::fromMap($map['tag_resources']);
        }

        return $model;
    }
}
