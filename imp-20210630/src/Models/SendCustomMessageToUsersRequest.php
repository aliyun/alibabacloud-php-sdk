<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class SendCustomMessageToUsersRequest extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间唯一标识，由调用CreateRoom返回。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 消息体内容。
     *
     * @var string
     */
    public $body;

    /**
     * @description 消息指定的接收人ID列表。
     *
     * @var string[]
     */
    public $receiverList;
    protected $_name = [
        'appId'        => 'AppId',
        'roomId'       => 'RoomId',
        'body'         => 'Body',
        'receiverList' => 'ReceiverList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->receiverList) {
            $res['ReceiverList'] = $this->receiverList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCustomMessageToUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['ReceiverList'])) {
            if (!empty($map['ReceiverList'])) {
                $model->receiverList = $map['ReceiverList'];
            }
        }

        return $model;
    }
}
