<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomMessageList extends Model
{
    /**
     * @example Hello,World
     *
     * @var string
     */
    public $body;

    /**
     * @example 0io**Fs6Q384
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 9645**c180a1
     *
     * @var string
     */
    public $roomId;

    /**
     * @example 1625125505079
     *
     * @var int
     */
    public $sendTimeMillis;

    /**
     * @example 62***59
     *
     * @var string
     */
    public $senderId;

    /**
     * @example 100001
     *
     * @var int
     */
    public $subType;
    protected $_name = [
        'body'           => 'Body',
        'messageId'      => 'MessageId',
        'roomId'         => 'RoomId',
        'sendTimeMillis' => 'SendTimeMillis',
        'senderId'       => 'SenderId',
        'subType'        => 'SubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->sendTimeMillis) {
            $res['SendTimeMillis'] = $this->sendTimeMillis;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
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
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['SendTimeMillis'])) {
            $model->sendTimeMillis = $map['SendTimeMillis'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}
