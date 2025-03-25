<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class CreateSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serverSn;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sessionToken;

    /**
     * @var string
     */
    public $wssEndpoint;
    protected $_name = [
        'requestId' => 'RequestId',
        'serverSn' => 'ServerSn',
        'sessionId' => 'SessionId',
        'sessionToken' => 'SessionToken',
        'wssEndpoint' => 'WssEndpoint',
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
