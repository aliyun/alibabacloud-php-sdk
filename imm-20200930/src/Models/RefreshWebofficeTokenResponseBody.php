<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RefreshWebofficeTokenResponseBody extends Model
{
    /**
     * @example 4996466c690a4902846ce00f96********
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 2021-08-31T13:07:28.950065359Z
     *
     * @var string
     */
    public $accessTokenExpiredTime;

    /**
     * @example 72a52ab3702a4123ab5594671a********
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @example 2021-09-01T12:37:28.950065359Z
     *
     * @var string
     */
    public $refreshTokenExpiredTime;

    /**
     * @example 501339F9-4B70-0CE2-AB8C-866C********
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessToken'             => 'AccessToken',
        'accessTokenExpiredTime'  => 'AccessTokenExpiredTime',
        'refreshToken'            => 'RefreshToken',
        'refreshTokenExpiredTime' => 'RefreshTokenExpiredTime',
        'requestId'               => 'RequestId',
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

        return $model;
    }
}
