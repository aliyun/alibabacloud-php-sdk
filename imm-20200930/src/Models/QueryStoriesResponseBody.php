<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryStoriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var Story[]
     */
    public $stories;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'stories'   => 'Stories',
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
        if (null !== $this->stories) {
            $res['Stories'] = [];
            if (null !== $this->stories && \is_array($this->stories)) {
                $n = 0;
                foreach ($this->stories as $item) {
                    $res['Stories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryStoriesResponseBody
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
        if (isset($map['Stories'])) {
            if (!empty($map['Stories'])) {
                $model->stories = [];
                $n              = 0;
                foreach ($map['Stories'] as $item) {
                    $model->stories[$n++] = null !== $item ? Story::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
