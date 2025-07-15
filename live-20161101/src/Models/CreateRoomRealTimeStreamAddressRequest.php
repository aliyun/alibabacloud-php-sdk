<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRoomRealTimeStreamAddressRequest extends Model
{
    /**
     * @description The ID of the ARTC application. You can specify only one application ID. The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the channel. You can specify only one ID. The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The name of the RTMP stream. The name can be up to 40 characters in length.
     *
     * This parameter is required.
     *
     * @example rtmp-dname
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The validity period of the RTMP URL. Unit: seconds. The default value is 36,000 seconds, which is 10 hours.
     *
     * @example 43200
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the user who ingests the stream over RTMP. The user ID must be different from IDs of other users in the channel. The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example rtmp-uuid
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'displayName' => 'DisplayName',
        'expireTime' => 'ExpireTime',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoomRealTimeStreamAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
