<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand;

use AlibabaCloud\Dara\Model;

class communication extends Model
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
    public $appId;

    /**
     * @var string
     */
    public $historyOwner;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'requestId' => 'requestId',
        'sessionId' => 'sessionId',
        'appId' => 'appId',
        'historyOwner' => 'historyOwner',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->historyOwner) {
            $res['historyOwner'] = $this->historyOwner;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['historyOwner'])) {
            $model->historyOwner = $map['historyOwner'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
