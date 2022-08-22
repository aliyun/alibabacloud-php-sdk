<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentResponseBody\result;

use AlibabaCloud\Tea\Model;

class commentVO extends Model
{
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
    public $senderId;

    /**
     * @var string
     */
    public $senderNick;
    protected $_name = [
        'commentId'  => 'CommentId',
        'content'    => 'Content',
        'createAt'   => 'CreateAt',
        'extension'  => 'Extension',
        'senderId'   => 'SenderId',
        'senderNick' => 'SenderNick',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createAt) {
            $res['CreateAt'] = $this->createAt;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
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
     * @return commentVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderNick'])) {
            $model->senderNick = $map['SenderNick'];
        }

        return $model;
    }
}
