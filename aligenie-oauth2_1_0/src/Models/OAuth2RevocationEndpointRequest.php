<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Voauth2_1_0\Models;

use AlibabaCloud\Dara\Model;

class OAuth2RevocationEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $tokenTypeHint;
    protected $_name = [
        'token' => 'Token',
        'tokenTypeHint' => 'TokenTypeHint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
