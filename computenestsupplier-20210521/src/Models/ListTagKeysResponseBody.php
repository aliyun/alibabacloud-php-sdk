<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ListTagKeysResponseBody extends Model
{
    /**
     * @description The tag keys.
     *
     * @var string[]
     */
    public $keys;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example AAAAAZ9FmxgN6wKfeK/GOKRnnjU=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 8872ACE6-0297-54A4-8AAD-3A8623EC6C5D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keys' => 'Keys',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
