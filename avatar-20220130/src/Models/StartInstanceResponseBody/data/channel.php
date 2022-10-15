<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\StartInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class channel extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string[]
     */
    public $gslb;

    /**
     * @var string
     */
    public $nonce;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userInfoInChannel;
    protected $_name = [
        'appId'             => 'AppId',
        'channelId'         => 'ChannelId',
        'expiredTime'       => 'ExpiredTime',
        'gslb'              => 'Gslb',
        'nonce'             => 'Nonce',
        'token'             => 'Token',
        'type'              => 'Type',
        'userId'            => 'UserId',
        'userInfoInChannel' => 'UserInfoInChannel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gslb) {
            $res['Gslb'] = $this->gslb;
        }
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userInfoInChannel) {
            $res['UserInfoInChannel'] = $this->userInfoInChannel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channel
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
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Gslb'])) {
            if (!empty($map['Gslb'])) {
                $model->gslb = $map['Gslb'];
            }
        }
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserInfoInChannel'])) {
            $model->userInfoInChannel = $map['UserInfoInChannel'];
        }

        return $model;
    }
}
