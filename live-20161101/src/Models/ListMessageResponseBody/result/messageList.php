<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageResponseBody\result;

use AlibabaCloud\Tea\Model;

class messageList extends Model
{
    /**
     * @description The message body. The value is a JSON string.
     *
     * @example test
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the message group.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the message.
     *
     * @example qt***
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The ID of the user who sent the message.
     *
     * @example yi***
     *
     * @var string
     */
    public $senderId;

    /**
     * @description The type of the message.
     *
     * @example 10002
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'data' => 'Data',
        'groupId' => 'GroupId',
        'messageId' => 'MessageId',
        'senderId' => 'SenderId',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
