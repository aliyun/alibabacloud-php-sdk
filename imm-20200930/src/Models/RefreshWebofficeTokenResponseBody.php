<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RefreshWebofficeTokenResponseBody extends Model
{
    /**
     * @description 请求 Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description refresh token
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @description access token
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description refresh token 过期时间
     *
     * @var string
     */
    public $refreshTokenExpiredTime;

    /**
     * @description access token 过期时间
     *
     * @var string
     */
    public $accessTokenExpiredTime;
    protected $_name = [
        'requestId'               => 'RequestId',
        'refreshToken'            => 'RefreshToken',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
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
     * @return RefreshWebofficeTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
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
