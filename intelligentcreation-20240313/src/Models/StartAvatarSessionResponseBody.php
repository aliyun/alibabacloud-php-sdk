<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class StartAvatarSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $channelToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $webSocketUrl;
    protected $_name = [
        'channelToken' => 'channelToken',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'token' => 'token',
        'webSocketUrl' => 'webSocketUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelToken) {
            $res['channelToken'] = $this->channelToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->webSocketUrl) {
            $res['webSocketUrl'] = $this->webSocketUrl;
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
        if (isset($map['channelToken'])) {
            $model->channelToken = $map['channelToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['webSocketUrl'])) {
            $model->webSocketUrl = $map['webSocketUrl'];
        }

        return $model;
    }
}
