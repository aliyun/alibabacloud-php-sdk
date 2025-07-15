<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\GetMessageTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The token used to establish a persistent connection.
     *
     * @example oauth_cloud_key:***-b0YY5Gy6Q
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description Indicates how long until the token expires. Unit: milliseconds.
     *
     * @example 86400000
     *
     * @var int
     */
    public $accessTokenExpiredTime;

    /**
     * @description The updated token. If a token expires, you can call RefreshToken to obtain a new token.
     *
     * @example oauth_cloud_key:****-Q62xggOTdgk3gw=
     *
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'accessTokenExpiredTime' => 'AccessTokenExpiredTime',
        'refreshToken' => 'RefreshToken',
    ];

    public function validate() {}

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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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

        return $model;
    }
}
