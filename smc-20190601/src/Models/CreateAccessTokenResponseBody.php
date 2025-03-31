<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Dara\Model;

class CreateAccessTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessTokenCode;

    /**
     * @var string
     */
    public $accessTokenId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessTokenCode' => 'AccessTokenCode',
        'accessTokenId' => 'AccessTokenId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
