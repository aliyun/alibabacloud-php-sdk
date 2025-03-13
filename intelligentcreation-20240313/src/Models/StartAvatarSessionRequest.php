<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

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
     * @example 13534711288320
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 15ED6083-B0B8-5B2A-BEDB-94A5C687C812
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'channelToken'  => 'channelToken',
        'customPushUrl' => 'customPushUrl',
        'customUserId'  => 'customUserId',
        'projectId'     => 'projectId',
        'requestId'     => 'requestId',
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

    /**
     * @param array $map
     *
     * @return StartAvatarSessionRequest
     */
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
