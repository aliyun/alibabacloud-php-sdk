<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendMessageRequest\requestParams\options;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 消息UUID
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
     * @description 会话类型
     *
     * @var int
     */
    public $conversationType;

    /**
     * @description 发送者UID
     *
     * @var string
     */
    public $senderId;

    /**
     * @description 消息内容类型
     *
     * @var int
     */
    public $contentType;

    /**
     * @description 消息内容Json
     *
     * @var string
     */
    public $content;

    /**
     * @description 消息扩展字段
     *
     * @var string[]
     */
    public $extensions;

    /**
     * @description 消息设置
     *
     * @var options
     */
    public $options;
    protected $_name = [
        'uuid'             => 'Uuid',
        'appCid'           => 'AppCid',
        'conversationType' => 'ConversationType',
        'senderId'         => 'SenderId',
        'contentType'      => 'ContentType',
        'content'          => 'Content',
        'extensions'       => 'Extensions',
        'options'          => 'Options',
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
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->options) {
            $res['Options'] = null !== $this->options ? $this->options->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
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
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['Options'])) {
            $model->options = options::fromMap($map['Options']);
        }

        return $model;
    }
}
