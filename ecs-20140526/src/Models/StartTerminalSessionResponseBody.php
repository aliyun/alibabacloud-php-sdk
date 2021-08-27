<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StartTerminalSessionResponseBody extends Model
{
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
    public $securityToken;

    /**
     * @var string
     */
    public $webSocketUrl;
    protected $_name = [
        'requestId'     => 'RequestId',
        'sessionId'     => 'SessionId',
        'securityToken' => 'SecurityToken',
        'webSocketUrl'  => 'WebSocketUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->webSocketUrl) {
            $res['WebSocketUrl'] = $this->webSocketUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartTerminalSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['WebSocketUrl'])) {
            $model->webSocketUrl = $map['WebSocketUrl'];
        }

        return $model;
    }
}
