<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20191211\Models;

use AlibabaCloud\Tea\Model;

class QueryTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $tokenStatus;
    protected $_name = [
        'requestId'   => 'RequestId',
        'tokenStatus' => 'TokenStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tokenStatus) {
            $res['TokenStatus'] = $this->tokenStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TokenStatus'])) {
            $model->tokenStatus = $map['TokenStatus'];
        }

        return $model;
    }
}
