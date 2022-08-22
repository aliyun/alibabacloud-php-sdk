<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class DeleteCommentByCreatorIdRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $commentIdList;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'         => 'AppId',
        'commentIdList' => 'CommentIdList',
        'creatorId'     => 'CreatorId',
        'roomId'        => 'RoomId',
        'userId'        => 'UserId',
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
        if (null !== $this->commentIdList) {
            $res['CommentIdList'] = $this->commentIdList;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
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
     * @return DeleteCommentByCreatorIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CommentIdList'])) {
            if (!empty($map['CommentIdList'])) {
                $model->commentIdList = $map['CommentIdList'];
            }
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
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
