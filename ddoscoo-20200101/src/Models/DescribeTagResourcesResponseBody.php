<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeTagResourcesResponseBody\tagResources;
use AlibabaCloud\Tea\Model;

class DescribeTagResourcesResponseBody extends Model
{
    /**
     * @description The query token that is returned in this call.
     *
     * @example RGuYpqDdKhzXb8C3.D1BwQgc1tMBsoxdGiEKHHUUCf****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 36E698F7-48A4-48D0-9554-0BB4BAAB99B3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array consisting of the details of the tags that are added to the Anti-DDoS Pro instance.
     *
     * @var tagResources
     */
    public $tagResources;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'tagResources' => 'TagResources',
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
     * @return DescribeTagResourcesResponseBody
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
