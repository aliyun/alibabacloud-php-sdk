<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class StartTerminalSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $securityToken;
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $webSocketUrl;
    protected $_name = [
        'requestId'     => 'RequestId',
        'securityToken' => 'SecurityToken',
        'sessionId'     => 'SessionId',
        'webSocketUrl'  => 'WebSocketUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->webSocketUrl) {
            $res['WebSocketUrl'] = $this->webSocketUrl;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['WebSocketUrl'])) {
            $model->webSocketUrl = $map['WebSocketUrl'];
        }

        return $model;
    }
}
