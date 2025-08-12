<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class MuteGroupUserShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $broadCastType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $muteTime;

    /**
     * @var string
     */
    public $muteUserListShrink;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
