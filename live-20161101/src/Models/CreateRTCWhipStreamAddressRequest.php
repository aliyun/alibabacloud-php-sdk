<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRTCWhipStreamAddressRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 6a0**6dcc-xxxx-xxxx-xxxx-e**e3exxxxxx
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example ch00000****001
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 58E73333-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 43200
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description This parameter is required.
     *
     * @example zb0000****0001
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'clientToken' => 'ClientToken',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
     * @return CreateRTCWhipStreamAddressRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
