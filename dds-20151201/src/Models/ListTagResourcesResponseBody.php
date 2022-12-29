<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\ListTagResourcesResponseBody\tagResources;
use AlibabaCloud\Tea\Model;

class ListTagResourcesResponseBody extends Model
{
    /**
     * @description The token used to start the next query.
     *
     * >  If not all results are returned in the first query, this parameter is returned. You can pass in the returned value of this parameter in the next query.
     * @example 212db86****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 96017AF2-9AB1-4BC9-88D2-7966B3CD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the tags of the instance.
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
