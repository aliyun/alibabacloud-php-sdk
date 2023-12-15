<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateAccessTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $expiresIn;

    /**
     * @var string
     */
    public $refreshToken;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken'  => 'AccessToken',
        'expiresIn'    => 'ExpiresIn',
        'refreshToken' => 'RefreshToken',
        'tokenType'    => 'TokenType',
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
        if (null !== $this->expiresIn) {
            $res['ExpiresIn'] = $this->expiresIn;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }
        if (null !== $this->tokenType) {
            $res['TokenType'] = $this->tokenType;
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
        if (isset($map['ExpiresIn'])) {
            $model->expiresIn = $map['ExpiresIn'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }
        if (isset($map['TokenType'])) {
            $model->tokenType = $map['TokenType'];
        }

        return $model;
    }
}
