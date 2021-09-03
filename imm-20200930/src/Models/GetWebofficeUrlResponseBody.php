<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetWebofficeUrlResponseBody extends Model
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
    public $webofficeUrl;

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
        'webofficeUrl'            => 'WebofficeUrl',
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
        if (null !== $this->webofficeUrl) {
            $res['WebofficeUrl'] = $this->webofficeUrl;
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
     * @return GetWebofficeUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebofficeUrl'])) {
            $model->webofficeUrl = $map['WebofficeUrl'];
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
