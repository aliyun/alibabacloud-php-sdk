<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\GetAuthTokenResponseBody;

use AlibabaCloud\Dara\Model;

class tokenInfo extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $jwtToken;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'jwtToken' => 'JwtToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
