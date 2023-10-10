<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources;
use AlibabaCloud\Tea\Model;

class ListTagResourcesResponseBody extends Model
{
    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example c374bf4864448****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example E368C761-F8F6-4A36-9B58-BD53D5CD0CEB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the queried labels and resources.
     *
     * @var tagResources
     */
    public $tagResources;
    protected $_name = [
        'nextToken'    => 'next_token',
        'requestId'    => 'request_id',
        'tagResources' => 'tag_resources',
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
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->tagResources) {
            $res['tag_resources'] = null !== $this->tagResources ? $this->tagResources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagResourcesResponseBody
     */
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
