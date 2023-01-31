<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeTagKeysResponseBody\tagKeys;
use AlibabaCloud\Tea\Model;

class DescribeTagKeysResponseBody extends Model
{
    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example DE65F6B7-7566-4802-9007-96F2494AC512
     *
     * @var string
     */
    public $requestId;

    /**
     * @var tagKeys
     */
    public $tagKeys;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'tagKeys'   => 'TagKeys',
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
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = null !== $this->tagKeys ? $this->tagKeys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTagKeysResponseBody
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
        if (isset($map['TagKeys'])) {
            $model->tagKeys = tagKeys::fromMap($map['TagKeys']);
        }

        return $model;
    }
}
