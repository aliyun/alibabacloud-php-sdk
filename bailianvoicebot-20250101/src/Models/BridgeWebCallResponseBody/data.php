<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianVoiceBot\V20250101\Models\BridgeWebCallResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'channelId' => 'ChannelId',
        'expirationTime' => 'ExpirationTime',
        'instanceId' => 'InstanceId',
        'serverUrl' => 'ServerUrl',
        'sessionId' => 'SessionId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
