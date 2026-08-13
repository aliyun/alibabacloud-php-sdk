<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class EnableTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $tokenMasked;
    protected $_name = [
        'code' => 'code',
        'message' => 'message',
        'requestId' => 'requestId',
        'token' => 'token',
        'tokenMasked' => 'tokenMasked',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->tokenMasked) {
            $res['tokenMasked'] = $this->tokenMasked;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['tokenMasked'])) {
            $model->tokenMasked = $map['tokenMasked'];
        }

        return $model;
    }
}
