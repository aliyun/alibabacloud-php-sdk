<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessTokenResponseBody extends Model
{
    /**
     * @description The value of the activation code. The value is returned only once after the CreateAccessToken operation is called and cannot be subsequently queried. Make sure that you properly save the returned value.
     *
     * @example B57QoTXEA2Tytr0uZWoNY5Aju5Jt****
     *
     * @var string
     */
    public $accessTokenCode;

    /**
     * @description The ID of the activation code.
     *
     * @example at-bp1akz2zp67r0k6r****
     *
     * @var string
     */
    public $accessTokenId;

    /**
     * @description The request ID.
     *
     * @example DB4A7EA2-6FDA-5655-B067-854532FB****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessTokenCode' => 'AccessTokenCode',
        'accessTokenId'   => 'AccessTokenId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTokenCode) {
            $res['AccessTokenCode'] = $this->accessTokenCode;
        }
        if (null !== $this->accessTokenId) {
            $res['AccessTokenId'] = $this->accessTokenId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAccessTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTokenCode'])) {
            $model->accessTokenCode = $map['AccessTokenCode'];
        }
        if (isset($map['AccessTokenId'])) {
            $model->accessTokenId = $map['AccessTokenId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
