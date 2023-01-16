<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GenerateWebofficeTokenResponseBody extends Model
{
    /**
     * @example 2d73dd5d87524c5e8a194c3eb5********
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 2021-08-30T13:13:11.347146982Z
     *
     * @var string
     */
    public $accessTokenExpiredTime;

    /**
     * @example e374995ec532432bb678074d36********
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @example 2021-08-31T12:43:11.347146982Z
     *
     * @var string
     */
    public $refreshTokenExpiredTime;

    /**
     * @example 1759315A-CB33-0A75-A72B-62D7********
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://office-hl.imm.aliyuncs.com/office/s/dd221b2cdb44fb66e9070d1d70a8b9bbb6d6fff7?_w_tokentype=1
     *
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
     * @return GenerateWebofficeTokenResponseBody
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
