<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 应用的appKey。
     *
     * @var string
     */
    public $domain;

    /**
     * @description 房间ID，由调用CreateRoom时返回。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 消息的发送者ID。
     *
     * @var string
     */
    public $senderId;

    /**
     * @description 消息的类型，由业务自定义，请传递100000以上。
     *
     * @var int
     */
    public $subType;

    /**
     * @description 消息体。
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'domain'   => 'Domain',
        'roomId'   => 'RoomId',
        'senderId' => 'SenderId',
        'subType'  => 'SubType',
        'body'     => 'Body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        return $model;
    }
}
