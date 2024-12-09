<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Tea\Model;

class OAuth2RevocationEndpointRequest extends Model
{
    /**
     * @example UJMiksSwuMJvwXrJLULMykSw6qZ6VqaxOkN4qd5cW1Q4HhsLxvUR5xVOIv1WB3br5LoP20lPa8xiYLSMbt8JqHACXdSdw7fNkhRTIHnadxWW5jfDg7BELUB0FcFfPiv0
     *
     * @var string
     */
    public $token;

    /**
     * @example refresh_token
     *
     * @var string
     */
    public $tokenTypeHint;
    protected $_name = [
        'token'         => 'Token',
        'tokenTypeHint' => 'TokenTypeHint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->tokenTypeHint) {
            $res['TokenTypeHint'] = $this->tokenTypeHint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OAuth2RevocationEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TokenTypeHint'])) {
            $model->tokenTypeHint = $map['TokenTypeHint'];
        }

        return $model;
    }
}
