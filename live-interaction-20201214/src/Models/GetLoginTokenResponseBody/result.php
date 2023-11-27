<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetLoginTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example EwOmBL8hRycisMQOw9hZppkd1ng4styC1KYAUtzzkqRTYWIE3uOSPkc3pcqEhOPtAIS4N825n4eee29sUwkV****
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 86400000
     *
     * @var int
     */
    public $accessTokenExpiredTime;

    /**
     * @example oauth_k1:rPIULQBrIpwxdhQCa5XPu17+t0vgwnzkJSLoc5hKe+6o/RAiuXPNQ7DfKiIL0V92I0sWZe/WOoEw9H86EqrT****
     *
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'accessToken'            => 'AccessToken',
        'accessTokenExpiredTime' => 'AccessTokenExpiredTime',
        'refreshToken'           => 'RefreshToken',
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
