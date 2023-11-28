<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagResourcesResponseBody\headers;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListTagResourcesResponseBody\tagResources;
use AlibabaCloud\Tea\Model;

class ListTagResourcesResponseBody extends Model
{
    /**
     * @description The labels of the resource.
     *
     * @var headers
     */
    public $headers;

    /**
     * @description The number of resources to query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description A list of resources that have tags.
     *
     * @example F99407AB-2FA9-489E-A259-40CF6D******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the resource. Fixed to `ALIYUN::ELASTICSEARCH::INSTANCE`.
     *
     * @var tagResources
     */
    public $tagResources;
    protected $_name = [
        'headers'      => 'Headers',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'tagResources' => 'TagResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headers) {
            $res['Headers'] = null !== $this->headers ? $this->headers->toMap() : null;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Headers'])) {
            $model->headers = headers::fromMap($map['Headers']);
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
