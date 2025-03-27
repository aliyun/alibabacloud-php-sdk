<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class StartAvatarSessionRequest extends Model
{
    /**
     * @var string
     */
    public $channelToken;

    /**
     * @var string
     */
    public $customPushUrl;

    /**
     * @var string
     */
    public $customUserId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channelToken' => 'channelToken',
        'customPushUrl' => 'customPushUrl',
        'customUserId' => 'customUserId',
        'projectId' => 'projectId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelToken) {
            $res['channelToken'] = $this->channelToken;
        }

        if (null !== $this->customPushUrl) {
            $res['customPushUrl'] = $this->customPushUrl;
        }

        if (null !== $this->customUserId) {
            $res['customUserId'] = $this->customUserId;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['customPushUrl'])) {
            $model->customPushUrl = $map['customPushUrl'];
        }

        if (isset($map['customUserId'])) {
            $model->customUserId = $map['customUserId'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
