<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class MuteGroupUserRequest extends Model
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
     * @var string[]
     */
    public $muteUserList;

    /**
     * @var string
     */
    public $operatorUserId;
    protected $_name = [
        'appId' => 'AppId',
        'broadCastType' => 'BroadCastType',
        'groupId' => 'GroupId',
        'muteTime' => 'MuteTime',
        'muteUserList' => 'MuteUserList',
        'operatorUserId' => 'OperatorUserId',
    ];

    public function validate()
    {
        if (\is_array($this->muteUserList)) {
            Model::validateArray($this->muteUserList);
        }
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

        if (null !== $this->muteUserList) {
            if (\is_array($this->muteUserList)) {
                $res['MuteUserList'] = [];
                $n1 = 0;
                foreach ($this->muteUserList as $item1) {
                    $res['MuteUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['MuteUserList'])) {
                $model->muteUserList = [];
                $n1 = 0;
                foreach ($map['MuteUserList'] as $item1) {
                    $model->muteUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }

        return $model;
    }
}
