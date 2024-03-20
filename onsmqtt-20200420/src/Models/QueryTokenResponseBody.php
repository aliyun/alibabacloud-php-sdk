<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class QueryTokenResponseBody extends Model
{
    /**
     * @description The unique ID that the system generates for the request. This parameter is a common parameter.
     *
     * @example 5C8AADD0-6A95-436D-AFA0-3405CCE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the queried token. Valid values:
     *
     *   **true**: indicates the token is valid.
     *   **false**: indicates the token is invalid.
     *
     * @example true
     *
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
