<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class GenerateYikeLoginTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $expiresAt;

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
    public $userId;
    protected $_name = [
        'expiresAt' => 'ExpiresAt',
        'requestId' => 'RequestId',
        'token' => 'Token',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
