<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthTokenResponseBody;

use AlibabaCloud\Tea\Model;

class tokenInfo extends Model
{
    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $accessToken;
    protected $_name = [
        'jwtToken'    => 'JwtToken',
        'accessToken' => 'AccessToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
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
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        return $model;
    }
}
