<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetAuthTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 用于长链接建连的token
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description 更新Token，若AccessToken过期，则可以使用RefreshToken再次获取新Token
     *
     * @var string
     */
    public $refreshToken;

    /**
     * @description 登录token过期时间(毫秒)
     *
     * @var int
     */
    public $accessTokenExpiredTime;
    protected $_name = [
        'accessToken'            => 'AccessToken',
        'refreshToken'           => 'RefreshToken',
        'accessTokenExpiredTime' => 'AccessTokenExpiredTime',
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
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->accessTokenExpiredTime) {
            $res['AccessTokenExpiredTime'] = $this->accessTokenExpiredTime;
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
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['AccessTokenExpiredTime'])) {
            $model->accessTokenExpiredTime = $map['AccessTokenExpiredTime'];
        }

        return $model;
    }
}
