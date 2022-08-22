<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class BanCommentRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $banCommentTime;

    /**
     * @var string
     */
    public $banCommentUser;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'          => 'AppId',
        'banCommentTime' => 'BanCommentTime',
        'banCommentUser' => 'BanCommentUser',
        'roomId'         => 'RoomId',
        'userId'         => 'UserId',
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
        if (null !== $this->banCommentTime) {
            $res['BanCommentTime'] = $this->banCommentTime;
        }
        if (null !== $this->banCommentUser) {
            $res['BanCommentUser'] = $this->banCommentUser;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BanCommentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BanCommentTime'])) {
            $model->banCommentTime = $map['BanCommentTime'];
        }
        if (isset($map['BanCommentUser'])) {
            $model->banCommentUser = $map['BanCommentUser'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
