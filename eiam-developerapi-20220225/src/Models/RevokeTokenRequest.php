<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class RevokeTokenRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @description 撤销的token
     *
     * @var string
     */
    public $token;

    /**
     * @description token类型
     *
     * @var string
     */
    public $tokenTypeHint;
    protected $_name = [
        'clientId'      => 'client_id',
        'clientSecret'  => 'client_secret',
        'token'         => 'token',
        'tokenTypeHint' => 'token_type_hint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['client_id'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $res['client_secret'] = $this->clientSecret;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->tokenTypeHint) {
            $res['token_type_hint'] = $this->tokenTypeHint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['client_id'])) {
            $model->clientId = $map['client_id'];
        }
        if (isset($map['client_secret'])) {
            $model->clientSecret = $map['client_secret'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['token_type_hint'])) {
            $model->tokenTypeHint = $map['token_type_hint'];
        }

        return $model;
    }
}
