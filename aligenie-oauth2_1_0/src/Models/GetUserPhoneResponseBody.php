<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetUserPhoneResponseBody extends Model
{
    /**
     * @example 18612345678
     *
     * @var string
     */
    public $phone;

    /**
     * @description Id of the request
     *
     * @example CEADB586-51CB-1B6B-95BD-AB85A7A08E97
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'phone'     => 'Phone',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserPhoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
