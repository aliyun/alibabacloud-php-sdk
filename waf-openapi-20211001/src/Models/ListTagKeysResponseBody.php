<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagKeysResponseBody\keys;
use AlibabaCloud\Tea\Model;

class ListTagKeysResponseBody extends Model
{
    /**
     * @description The keys and types of the tags.
     *
     * @var keys[]
     */
    public $keys;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. If NextToken is empty, no next page exists.
     *
     * @example caeba0bbb2be03f84eb48b699f0*****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 8CB8BB88-24C7-5608-BF5E-4DCA****CF1C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keys'      => 'Keys',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keys) {
            $res['Keys'] = [];
            if (null !== $this->keys && \is_array($this->keys)) {
                $n = 0;
                foreach ($this->keys as $item) {
                    $res['Keys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
                $model->keys = [];
                $n           = 0;
                foreach ($map['Keys'] as $item) {
                    $model->keys[$n++] = null !== $item ? keys::fromMap($item) : $item;
                }
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
