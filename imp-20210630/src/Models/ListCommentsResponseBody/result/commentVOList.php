<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListCommentsResponseBody\result;

use AlibabaCloud\Tea\Model;

class commentVOList extends Model
{
    /**
     * @description 应用ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 弹幕消息的唯一ID标识。
     *
     * @var string
     */
    public $commentId;

    /**
     * @description 弹幕消息的发送者ID标识。
     *
     * @var string
     */
    public $senderId;

    /**
     * @description 弹幕消息发送者的昵称。
     *
     * @var string
     */
    public $senderNick;

    /**
     * @description 弹幕消息的创建时间，Unix时间戳，单位：毫秒。
     *
     * @var int
     */
    public $createAt;

    /**
     * @description 弹幕消息的内容。
     *
     * @var string
     */
    public $content;

    /**
     * @description 扩展字段。
     *
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'appId'      => 'AppId',
        'roomId'     => 'RoomId',
        'commentId'  => 'CommentId',
        'senderId'   => 'SenderId',
        'senderNick' => 'SenderNick',
        'createAt'   => 'CreateAt',
        'content'    => 'Content',
        'extension'  => 'Extension',
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
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->commentId) {
            $res['CommentId'] = $this->commentId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderNick) {
            $res['SenderNick'] = $this->senderNick;
        }
        if (null !== $this->createAt) {
            $res['CreateAt'] = $this->createAt;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
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
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['CommentId'])) {
            $model->commentId = $map['CommentId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }
        if (isset($map['CreateAt'])) {
            $model->createAt = $map['CreateAt'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        return $model;
    }
}
