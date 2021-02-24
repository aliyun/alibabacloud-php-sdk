<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 消息Id
     *
     * @var string
     */
    public $msgId;

    /**
     * @description 会话Id
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 会话类型
     *
     * @var int
     */
    public $conversationType;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 发送者的用户Id
     *
     * @var string
     */
    public $senderId;

    /**
     * @description 消息类型
     *
     * @var int
     */
    public $contentType;

    /**
     * @description 消息体
     *
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'msgId'            => 'MsgId',
        'appCid'           => 'AppCid',
        'conversationType' => 'ConversationType',
        'createTime'       => 'CreateTime',
        'senderId'         => 'SenderId',
        'contentType'      => 'ContentType',
        'content'          => 'Content',
        'extensions'       => 'Extensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->conversationType) {
            $res['ConversationType'] = $this->conversationType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['ConversationType'])) {
            $model->conversationType = $map['ConversationType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
