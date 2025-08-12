<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CancelMuteGroupUserRequest extends Model
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
     * @var string[]
     */
    public $cancelMuteUserList;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $operatorUserId;
    protected $_name = [
        'appId' => 'AppId',
        'broadCastType' => 'BroadCastType',
        'cancelMuteUserList' => 'CancelMuteUserList',
        'groupId' => 'GroupId',
        'operatorUserId' => 'OperatorUserId',
    ];

    public function validate()
    {
        if (\is_array($this->cancelMuteUserList)) {
            Model::validateArray($this->cancelMuteUserList);
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

        if (null !== $this->cancelMuteUserList) {
            if (\is_array($this->cancelMuteUserList)) {
                $res['CancelMuteUserList'] = [];
                $n1 = 0;
                foreach ($this->cancelMuteUserList as $item1) {
                    $res['CancelMuteUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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

        if (isset($map['CancelMuteUserList'])) {
            if (!empty($map['CancelMuteUserList'])) {
                $model->cancelMuteUserList = [];
                $n1 = 0;
                foreach ($map['CancelMuteUserList'] as $item1) {
                    $model->cancelMuteUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }

        return $model;
    }
}
