<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsResponseBody\result;

use AlibabaCloud\Tea\Model;

class commentVOList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $commentId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $createAt;

    /**
     * @var string[]
     */
    public $extension;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderNick;
    protected $_name = [
        'appId'      => 'AppId',
        'commentId'  => 'CommentId',
        'content'    => 'Content',
        'createAt'   => 'CreateAt',
        'extension'  => 'Extension',
        'roomId'     => 'RoomId',
        'senderId'   => 'SenderId',
        'senderNick' => 'SenderNick',
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
        if (null !== $this->commentId) {
            $res['CommentId'] = $this->commentId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createAt) {
            $res['CreateAt'] = $this->createAt;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderNick) {
            $res['SenderNick'] = $this->senderNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commentVOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CommentId'])) {
            $model->commentId = $map['CommentId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateAt'])) {
            $model->createAt = $map['CreateAt'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }

        return $model;
    }
}
