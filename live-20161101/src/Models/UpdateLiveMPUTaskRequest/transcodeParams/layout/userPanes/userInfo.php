<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\layout\userPanes;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @description The ID of the channel where the user is. If the user is in the same channel, you can leave this parameter empty. We recommend that you specify this parameter when you perform stream mixing across channels.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The type of the video source. This parameter is valid only when you set StreamType to 2. Valid values:
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
     * @description The user ID.
     *
     * @example yourSubUserId
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'channelId' => 'ChannelId',
        'sourceType' => 'SourceType',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
