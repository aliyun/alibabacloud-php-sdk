<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateSessionResponseBody extends Model
{
    /**
     * @description ID of the request
     *
     * @example 887FA855-89F4-5DB3-B305-C5879EC480E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 节点  ID。
     *
     * @example 2A59143F1
     *
     * @var string
     */
    public $serverSn;

    /**
     * @description Session ID.
     *
     * @example i207023871669364793713
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description Session token.
     *
     * @example 03f53c719015a9ad4f4f55d66cac2dac161b18e8065ca75a3220b89de389c980
     *
     * @var string
     */
    public $sessionToken;

    /**
     * @description WebSocket address
     *
     * @example ws://x.x.x.x:xx/calypso_web_console
     *
     * @var string
     */
    public $wssEndpoint;
    protected $_name = [
        'requestId'    => 'RequestId',
        'serverSn'     => 'ServerSn',
        'sessionId'    => 'SessionId',
        'sessionToken' => 'SessionToken',
        'wssEndpoint'  => 'WssEndpoint',
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
        if (null !== $this->serverSn) {
            $res['ServerSn'] = $this->serverSn;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sessionToken) {
            $res['SessionToken'] = $this->sessionToken;
        }
        if (null !== $this->wssEndpoint) {
            $res['WssEndpoint'] = $this->wssEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServerSn'])) {
            $model->serverSn = $map['ServerSn'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SessionToken'])) {
            $model->sessionToken = $map['SessionToken'];
        }
        if (isset($map['WssEndpoint'])) {
            $model->wssEndpoint = $map['WssEndpoint'];
        }

        return $model;
    }
}
