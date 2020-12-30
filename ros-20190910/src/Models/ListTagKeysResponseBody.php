<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListTagKeysResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $keys;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'keys'      => 'Keys',
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
        if (null !== $this->keys) {
            $res['Keys'] = $this->keys;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = $map['Keys'];
            }
        }

        return $model;
    }
}
