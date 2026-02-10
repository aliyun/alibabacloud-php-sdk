<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartRtcCloudTranscodeRequest;

use AlibabaCloud\Dara\Model;

class outputParams extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $transcodeTemplate;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userToken;
    protected $_name = [
        'channelId' => 'ChannelId',
        'transcodeTemplate' => 'TranscodeTemplate',
        'userId' => 'UserId',
        'userToken' => 'UserToken',
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

        if (null !== $this->transcodeTemplate) {
            $res['TranscodeTemplate'] = $this->transcodeTemplate;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userToken) {
            $res['UserToken'] = $this->userToken;
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

        if (isset($map['TranscodeTemplate'])) {
            $model->transcodeTemplate = $map['TranscodeTemplate'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserToken'])) {
            $model->userToken = $map['UserToken'];
        }

        return $model;
    }
}
