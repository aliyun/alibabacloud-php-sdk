<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $authKey;
    protected $_name = [
        'requestId' => 'RequestId',
        'authKey'   => 'AuthKey',
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
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        return $model;
    }
}
