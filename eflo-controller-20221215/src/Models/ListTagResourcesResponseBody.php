<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListTagResourcesResponseBody\tagResources;
use AlibabaCloud\Tea\Model;

class ListTagResourcesResponseBody extends Model
{
    /**
     * @description NextToken for the next page, include this returned value when requesting the next page
     *
     * @example AAAAAdQ3Z+oPlg49gsr2y8jb6wY=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Request ID
     *
     * @example 8F208B6D-4C42-5FD3-B6BE-E826E92A44DD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Tagged resources.
     *
     * @var tagResources
     */
    public $tagResources;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'tagResources' => 'TagResources',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagResources) {
            $res['TagResources'] = null !== $this->tagResources ? $this->tagResources->toMap() : null;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagResources'])) {
            $model->tagResources = tagResources::fromMap($map['TagResources']);
        }

        return $model;
    }
}
