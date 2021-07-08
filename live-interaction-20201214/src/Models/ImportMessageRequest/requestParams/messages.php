<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest\requestParams;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest\requestParams\messages\receiverUsers;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @description 唯一标识，用于重入
     *
     * @var string
     */
    public $uuid;

    /**
     * @description 会话ID
     *
     * @var string
     */
    public $appCid;

    /**
     * @description 会话类型1 单聊 2 群聊
     *
     * @var int
     */
    public $conversationType;

    /**
     * @description 发送者ID
     *
     * @var string
     */
    public $senderId;

    /**
     * @description 接受者列表, 群聊如果列表为空者全员接收
     *
     * @var receiverUsers[]
     */
    public $receiverUsers;

    /**
     * @description 消息类型
     *
     * @var int
     */
    public $contentType;

    /**
     * @description 消息内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 消息发送时间戳
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 自定义信息
     *
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'uuid'             => 'Uuid',
        'appCid'           => 'AppCid',
        'conversationType' => 'ConversationType',
        'senderId'         => 'SenderId',
        'receiverUsers'    => 'ReceiverUsers',
        'contentType'      => 'ContentType',
        'content'          => 'Content',
        'createTime'       => 'CreateTime',
        'extensions'       => 'Extensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->conversationType) {
            $res['ConversationType'] = $this->conversationType;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->receiverUsers) {
            $res['ReceiverUsers'] = [];
            if (null !== $this->receiverUsers && \is_array($this->receiverUsers)) {
                $n = 0;
                foreach ($this->receiverUsers as $item) {
                    $res['ReceiverUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['ConversationType'])) {
            $model->conversationType = $map['ConversationType'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['ReceiverUsers'])) {
            if (!empty($map['ReceiverUsers'])) {
                $model->receiverUsers = [];
                $n                    = 0;
                foreach ($map['ReceiverUsers'] as $item) {
                    $model->receiverUsers[$n++] = null !== $item ? receiverUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
