<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class StartTerminalSessionResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example EB5173B0-8E80-564E-AAD1-3135412*****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The security token included in the WebSocket request header. The system uses this token to authenticate the request.
     *
     * @example d86c2df2-d19c-4bd8-b817-a19ef123****
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the session.
     *
     * @example s-hz023od0x9****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The URL of the WebSocket session that is used to connect to the instance. The URL includes the session ID (`SessionId`) and the authentication token (`SecurityToken`).
     *
     * @example wss://cn-hangzhou.axt.aliyuncs.com/session?sessionId=s-hz023od0x9****&token=d86c2df2-d19c-4bd8-b817-a19ef123****
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
