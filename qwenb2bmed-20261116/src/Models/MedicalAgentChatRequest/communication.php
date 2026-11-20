<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalAgentChatRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalAgentChatRequest\communication\userInfo;

class communication extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appScene;

    /**
     * @var string
     */
    public $historyOwner;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'appId' => 'appId',
        'appScene' => 'appScene',
        'historyOwner' => 'historyOwner',
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'userInfo' => 'userInfo',
    ];

    public function validate()
    {
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->appScene) {
            $res['appScene'] = $this->appScene;
        }

        if (null !== $this->historyOwner) {
            $res['historyOwner'] = $this->historyOwner;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->userInfo) {
            $res['userInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['appScene'])) {
            $model->appScene = $map['appScene'];
        }

        if (isset($map['historyOwner'])) {
            $model->historyOwner = $map['historyOwner'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['userInfo'])) {
            $model->userInfo = userInfo::fromMap($map['userInfo']);
        }

        return $model;
    }
}
