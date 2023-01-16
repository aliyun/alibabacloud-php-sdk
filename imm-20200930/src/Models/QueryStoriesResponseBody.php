<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryStoriesResponseBody extends Model
{
    /**
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3Qx****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 2C5C1E0F-D8B8-4DA0-8127-EC32C771****
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
