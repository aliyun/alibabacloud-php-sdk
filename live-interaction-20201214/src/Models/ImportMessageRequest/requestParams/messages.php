<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest\requestParams;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @example $1$123:124
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
     * @example 1613700223555
     *
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example 1
     *
     * @var string[]
     */
    public $receiverIds;

    /**
     * @example 123
     *
     * @var string
     */
    public $senderId;

    /**
     * @example 123999992222
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appCid'           => 'AppCid',
        'content'          => 'Content',
        'contentType'      => 'ContentType',
        'conversationType' => 'ConversationType',
        'createTime'       => 'CreateTime',
        'extensions'       => 'Extensions',
        'receiverIds'      => 'ReceiverIds',
        'senderId'         => 'SenderId',
        'uuid'             => 'Uuid',
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
        if (null !== $this->receiverIds) {
            $res['ReceiverIds'] = $this->receiverIds;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ReceiverIds'])) {
            if (!empty($map['ReceiverIds'])) {
                $model->receiverIds = $map['ReceiverIds'];
            }
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
