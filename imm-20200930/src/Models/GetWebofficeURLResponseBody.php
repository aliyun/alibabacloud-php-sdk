<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetWebofficeURLResponseBody extends Model
{
    /**
     * @description 请求 id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 预览编辑地址
     *
     * @var string
     */
    public $webofficeURL;

    /**
     * @description access token
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description refresh token
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @description access token 过期时间
     *
     * @var string
     */
    public $accessTokenExpiredTime;

    /**
     * @description refresh token 过期时间
     *
     * @var string
     */
    public $refreshTokenExpiredTime;
    protected $_name = [
        'requestId'               => 'RequestId',
        'webofficeURL'            => 'WebofficeURL',
        'accessToken'             => 'AccessToken',
        'refreshToken'            => 'RefreshToken',
        'accessTokenExpiredTime'  => 'AccessTokenExpiredTime',
        'refreshTokenExpiredTime' => 'RefreshTokenExpiredTime',
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
        if (null !== $this->webofficeURL) {
            $res['WebofficeURL'] = $this->webofficeURL;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->accessTokenExpiredTime) {
            $res['AccessTokenExpiredTime'] = $this->accessTokenExpiredTime;
        }
        if (null !== $this->refreshTokenExpiredTime) {
            $res['RefreshTokenExpiredTime'] = $this->refreshTokenExpiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebofficeURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebofficeURL'])) {
            $model->webofficeURL = $map['WebofficeURL'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['AccessTokenExpiredTime'])) {
            $model->accessTokenExpiredTime = $map['AccessTokenExpiredTime'];
        }
        if (isset($map['RefreshTokenExpiredTime'])) {
            $model->refreshTokenExpiredTime = $map['RefreshTokenExpiredTime'];
        }

        return $model;
    }
}
