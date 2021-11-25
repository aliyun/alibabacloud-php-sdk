<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetUserAuthorizationResponseBody extends Model
{
    /**
     * @description 是否通过鉴权
     *
     * @var bool
     */
    public $isPassed;

    /**
     * @description 请求ID
     *
     * @var int
     */
    public $requestId;
    protected $_name = [
        'isPassed'  => 'IsPassed',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPassed) {
            $res['IsPassed'] = $this->isPassed;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserAuthorizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPassed'])) {
            $model->isPassed = $map['IsPassed'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
