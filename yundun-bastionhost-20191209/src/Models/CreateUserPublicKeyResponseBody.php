<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateUserPublicKeyResponseBody extends Model
{
    /**
     * @description The ID of the public key.
     *
     * @example 1
     *
     * @var string
     */
    public $publicKeyId;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5EAB922E-F476-5DFA-9290-313C608E724B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'publicKeyId' => 'PublicKeyId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicKeyId) {
            $res['PublicKeyId'] = $this->publicKeyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserPublicKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicKeyId'])) {
            $model->publicKeyId = $map['PublicKeyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
