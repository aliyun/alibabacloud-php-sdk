<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\ListTagResourcesResponseBody\tagResources\tagResource;
use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description 可用版本。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 请求ID.
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 资源标签。
     *
     * @var tagResource
     */
    public $tagResource;
    protected $_name = [
        'nextToken'   => 'next_token',
        'requestId'   => 'request_id',
        'tagResource' => 'tag_resource',
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
        if (null !== $this->tagResource) {
            $res['tag_resource'] = null !== $this->tagResource ? $this->tagResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagResources
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
        if (isset($map['tag_resource'])) {
            $model->tagResource = tagResource::fromMap($map['tag_resource']);
        }

        return $model;
    }
}
