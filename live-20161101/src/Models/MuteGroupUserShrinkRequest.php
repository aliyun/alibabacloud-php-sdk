<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class MuteGroupUserShrinkRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The mode in which system messages are broadcasted. Valid values:
     *
     *   0: specifies that system messages are not broadcasted. This is the default value.
     *   1: specifies that system messages are broadcasted to specified users.
     *   2: specifies that system messages are broadcasted to the message group.
     *
     * @example 2
     *
     * @var int
     */
    public $broadCastType;

    /**
     * @description The ID of the message group.
     *
     * This parameter is required.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The duration of the mute. Unit: seconds.
     *
     * > If you do not specify this parameter or set the value to 0, the default duration of 86,400 seconds is used.
     *
     * @example 3600
     *
     * @var int
     */
    public $muteTime;

    /**
     * @description Details about the mute.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $muteUserListShrink;

    /**
     * @description The ID of the user who performs the operation.
     *
     * @example de1**a0
     *
     * @var string
     */
    public $operatorUserId;
    protected $_name = [
        'appId' => 'AppId',
        'broadCastType' => 'BroadCastType',
        'groupId' => 'GroupId',
        'muteTime' => 'MuteTime',
        'muteUserListShrink' => 'MuteUserList',
        'operatorUserId' => 'OperatorUserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->broadCastType) {
            $res['BroadCastType'] = $this->broadCastType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->muteTime) {
            $res['MuteTime'] = $this->muteTime;
        }
        if (null !== $this->muteUserListShrink) {
            $res['MuteUserList'] = $this->muteUserListShrink;
        }
        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MuteGroupUserShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BroadCastType'])) {
            $model->broadCastType = $map['BroadCastType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MuteTime'])) {
            $model->muteTime = $map['MuteTime'];
        }
        if (isset($map['MuteUserList'])) {
            $model->muteUserListShrink = $map['MuteUserList'];
        }
        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }

        return $model;
    }
}
