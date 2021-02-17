<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetOfficeEditURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $editURL;

    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $refreshTokenExpiredTime;

    /**
     * @var string
     */
    public $accessTokenExpiredTime;
    protected $_name = [
        'refreshToken'            => 'RefreshToken',
        'requestId'               => 'RequestId',
        'editURL'                 => 'EditURL',
        'accessToken'             => 'AccessToken',
        'refreshTokenExpiredTime' => 'RefreshTokenExpiredTime',
        'accessTokenExpiredTime'  => 'AccessTokenExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->editURL) {
            $res['EditURL'] = $this->editURL;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->refreshTokenExpiredTime) {
            $res['RefreshTokenExpiredTime'] = $this->refreshTokenExpiredTime;
        }
        if (null !== $this->accessTokenExpiredTime) {
            $res['AccessTokenExpiredTime'] = $this->accessTokenExpiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficeEditURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EditURL'])) {
            $model->editURL = $map['EditURL'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['RefreshTokenExpiredTime'])) {
            $model->refreshTokenExpiredTime = $map['RefreshTokenExpiredTime'];
        }
        if (isset($map['AccessTokenExpiredTime'])) {
            $model->accessTokenExpiredTime = $map['AccessTokenExpiredTime'];
        }

        return $model;
    }
}
