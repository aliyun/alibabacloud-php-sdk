<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class RevokeAuthenticationTokenRequest extends Model
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
        'token' => 'token',
        'tokenTypeHint' => 'token_type_hint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->tokenTypeHint) {
            $res['token_type_hint'] = $this->tokenTypeHint;
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
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['token_type_hint'])) {
            $model->tokenTypeHint = $map['token_type_hint'];
        }

        return $model;
    }
}
