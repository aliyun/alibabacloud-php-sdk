<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetMessageByIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example $1$125:888
     *
     * @var string
     */
    public $appCid;

    /**
     * @example {"text": "hello"}
     *
     * @var string
     */
    public $content;

    /**
     * @example 1
     *
     * @var int
     */
    public $contentType;

    /**
     * @example 1
     *
     * @var int
     */
    public $conversationType;

    /**
     * @example 1588999999
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example 12345$PNM
     *
     * @var string
     */
    public $msgId;

    /**
     * @example 125
     *
     * @var string
     */
    public $senderId;
    protected $_name = [
        'appCid'           => 'AppCid',
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'conversationType' => 'ConversationType',
        'createTime'       => 'CreateTime',
        'extensions'       => 'Extensions',
        'msgId'            => 'MsgId',
        'senderId'         => 'SenderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCid) {
            $res['AppCid'] = $this->appCid;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->conversationType) {
            $res['ConversationType'] = $this->conversationType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->msgId) {
            $res['MsgId'] = $this->msgId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
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
        if (isset($map['AppCid'])) {
            $model->appCid = $map['AppCid'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['ConversationType'])) {
            $model->conversationType = $map['ConversationType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['MsgId'])) {
            $model->msgId = $map['MsgId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }

        return $model;
    }
}
