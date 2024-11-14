<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateAICoachTaskSessionResponseBody\scriptInfo;
use AlibabaCloud\Tea\Model;

class CreateAICoachTaskSessionResponseBody extends Model
{
    /**
     * @description rtctoken
     *
     * @example 11
     *
     * @var string
     */
    public $channelToken;

    /**
     * @example 4830493A-728F-5F19-BBCC-1443292E9C49
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scriptInfo
     */
    public $scriptInfo;

    /**
     * @example 111
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description Token
     *
     * @example 11
     *
     * @var string
     */
    public $token;

    /**
     * @example 11
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelToken) {
            $res['channelToken'] = $this->channelToken;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->scriptInfo) {
            $res['scriptInfo'] = null !== $this->scriptInfo ? $this->scriptInfo->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return CreateAICoachTaskSessionResponseBody
     */
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
