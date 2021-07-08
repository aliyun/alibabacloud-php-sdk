<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomMessageList extends Model
{
    /**
     * @description 房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 消息的唯一ID标识。由数字、大小写字母组成，长度不超过20。
     *
     * @var string
     */
    public $messageId;

    /**
     * @description 消息的类型。
     *
     * @var int
     */
    public $subType;

    /**
     * @description 消息的发送者ID。
     *
     * @var string
     */
    public $senderId;

    /**
     * @description 消息的发送时间,毫秒unix时间戳。
     *
     * @var int
     */
    public $sendTimeMillis;

    /**
     * @description 消息体。
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'roomId'         => 'RoomId',
        'messageId'      => 'MessageId',
        'subType'        => 'SubType',
        'senderId'       => 'SenderId',
        'sendTimeMillis' => 'SendTimeMillis',
        'body'           => 'Body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->sendTimeMillis) {
            $res['SendTimeMillis'] = $this->sendTimeMillis;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomMessageList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SendTimeMillis'])) {
            $model->sendTimeMillis = $map['SendTimeMillis'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        return $model;
    }
}
