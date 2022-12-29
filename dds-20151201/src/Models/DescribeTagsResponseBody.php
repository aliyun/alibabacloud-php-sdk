<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeTagsResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeTagsResponseBody extends Model
{
    /**
     * @description The token used to start the next query.
     *
     * >  If not all results are returned in the first query, this parameter is returned. You can pass in the value of this parameter in the next query.
     * @example 212db86****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example EEDBE38F-5CF5-4316-AAC2-35817BA60D68
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Details about the tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'tags'      => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagsResponseBody
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
