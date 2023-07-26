<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetTokenResponseBody extends Model
{
    /**
     * @example 473469C7-AA6F-4DC5-B3DB-xxxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9*****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'requestId' => 'RequestId',
        'token'     => 'Token',
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
