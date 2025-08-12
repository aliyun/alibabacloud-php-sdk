<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class JoinMessageGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $broadCastStatistics;

    /**
     * @var int
     */
    public $broadCastType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'broadCastStatistics' => 'BroadCastStatistics',
        'broadCastType' => 'BroadCastType',
        'groupId' => 'GroupId',
        'userId' => 'UserId',
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

        if (null !== $this->broadCastStatistics) {
            $res['BroadCastStatistics'] = $this->broadCastStatistics;
        }

        if (null !== $this->broadCastType) {
            $res['BroadCastType'] = $this->broadCastType;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['BroadCastStatistics'])) {
            $model->broadCastStatistics = $map['BroadCastStatistics'];
        }

        if (isset($map['BroadCastType'])) {
            $model->broadCastType = $map['BroadCastType'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
