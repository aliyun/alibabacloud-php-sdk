<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\transcodeParams;

use AlibabaCloud\Tea\Model;

class userInfos extends Model
{
    /**
     * @description The ID of the channel where the subscribed user is. If the user is in the same channel, you can leave this parameter empty. We recommend that you specify this parameter when you perform stream mixing across channels.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The type of the video source that is subscribed to. This parameter is valid only when you set StreamType to 2. Valid values:
     *
     *   **camera** (default)
     *   **shareScreen**
     *
     * @example camera
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The type of the relayed stream that is subscribed to. Valid values:
     *
     *   **0** (default): original stream
     *   **1**: only the audio track
     *   **2**: only the video track
     *
     * @example 0
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The ID of the subscribed user.
     *
     * This parameter is required.
     *
     * @example yourSubUserId
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'channelId' => 'ChannelId',
        'sourceType' => 'SourceType',
        'streamType' => 'StreamType',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
