<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class StartTerminalSessionResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example token-xxxaaz
     *
     * @var string
     */
    public $securityToken;

    /**
     * @example ffb90b6e-b18a-4a33-88cf-86fb88****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example wss://xxxx
     *
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
    }

    public function toMap()
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
