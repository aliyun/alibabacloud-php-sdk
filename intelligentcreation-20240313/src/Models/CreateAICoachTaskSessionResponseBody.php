<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskSessionResponseBody\scriptInfo;

class CreateAICoachTaskSessionResponseBody extends Model
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
     * @var scriptInfo
     */
    public $scriptInfo;
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
        'requestId'    => 'requestId',
        'scriptInfo'   => 'scriptInfo',
        'sessionId'    => 'sessionId',
        'token'        => 'token',
        'webSocketUrl' => 'webSocketUrl',
    ];

    public function validate()
    {
        if (null !== $this->scriptInfo) {
            $this->scriptInfo->validate();
        }
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

        if (null !== $this->scriptInfo) {
            $res['scriptInfo'] = null !== $this->scriptInfo ? $this->scriptInfo->toArray($noStream) : $this->scriptInfo;
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

        if (isset($map['scriptInfo'])) {
            $model->scriptInfo = scriptInfo::fromMap($map['scriptInfo']);
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
