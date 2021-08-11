<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentResponseBody\result;

use AlibabaCloud\Tea\Model;

class commentVO extends Model
{
    /**
     * @description 弹幕的唯一ID。
     *
     * @var string
     */
    public $commentId;

    /**
     * @description 弹幕的发送者ID标识。
     *
     * @var string
     */
    public $senderId;

    /**
     * @description 弹幕发送者的昵称。
     *
     * @var string
     */
    public $senderNick;

    /**
     * @description 弹幕的创建时间，Unix时间戳，单位：毫秒。
     *
     * @var int
     */
    public $createAt;

    /**
     * @description 弹幕的内容。
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
     * @return commentVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
