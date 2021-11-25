<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetWebofficeURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $accessTokenExpiredTime;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $refreshTokenExpiredTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $webofficeURL;
    protected $_name = [
        'accessToken'             => 'AccessToken',
        'accessTokenExpiredTime'  => 'AccessTokenExpiredTime',
        'refreshToken'            => 'RefreshToken',
        'refreshTokenExpiredTime' => 'RefreshTokenExpiredTime',
        'requestId'               => 'RequestId',
        'webofficeURL'            => 'WebofficeURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->accessTokenExpiredTime) {
            $res['AccessTokenExpiredTime'] = $this->accessTokenExpiredTime;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->refreshTokenExpiredTime) {
            $res['RefreshTokenExpiredTime'] = $this->refreshTokenExpiredTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webofficeURL) {
            $res['WebofficeURL'] = $this->webofficeURL;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['AccessTokenExpiredTime'])) {
            $model->accessTokenExpiredTime = $map['AccessTokenExpiredTime'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['RefreshTokenExpiredTime'])) {
            $model->refreshTokenExpiredTime = $map['RefreshTokenExpiredTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebofficeURL'])) {
            $model->webofficeURL = $map['WebofficeURL'];
        }

        return $model;
    }
}
