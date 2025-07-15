<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams;

use AlibabaCloud\Tea\Model;

class userInfos extends Model
{
    /**
     * @description The ID of the channel where the user is.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The source of the video. This parameter is valid only if you set StreamType to 2. Valid values:
     *
     *   camera (default): captures the video by using a camera.
     *   shareScreen: captures the content displayed on a screen.
     *
     * @example camera
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The type of the stream that is relayed. Valid values:
     *
     *   0 (default): the original stream.
     *   1: the audio-only stream.
     *   2: the video-only stream.
     *
     * @example 0
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The ID of the user.
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
