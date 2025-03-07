<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class StartRtcRobotInstanceShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example **********
     *
     * @var string
     */
    public $authToken;

    /**
     * @description This parameter is required.
     *
     * @example testId
     *
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $configShrink;

    /**
     * @description This parameter is required.
     *
     * @example ca28b08ad3464ebcb42e5c0f7c6d2e89
     *
     * @var string
     */
    public $robotId;

    /**
     * @example {}
     *
     * @var string
     */
    public $userData;

    /**
     * @description This parameter is required.
     *
     * @example my-robot
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'authToken'    => 'AuthToken',
        'channelId'    => 'ChannelId',
        'configShrink' => 'Config',
        'robotId'      => 'RobotId',
        'userData'     => 'UserData',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->configShrink) {
            $res['Config'] = $this->configShrink;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRtcRobotInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Config'])) {
            $model->configShrink = $map['Config'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
