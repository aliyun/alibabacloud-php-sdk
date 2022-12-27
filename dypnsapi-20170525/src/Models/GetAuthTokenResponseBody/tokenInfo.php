<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthTokenResponseBody;

use AlibabaCloud\Tea\Model;

class tokenInfo extends Model
{
    /**
     * @example agag****
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example aweghd****
     *
     * @var string
     */
    public $jwtToken;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'jwtToken'    => 'JwtToken',
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
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tokenInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }

        return $model;
    }
}
