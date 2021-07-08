<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest\requestParams\messages;

use AlibabaCloud\Tea\Model;

class receiverUsers extends Model
{
    /**
     * @description 接受者ID
     *
     * @var string
     */
    public $receiverId;

    /**
     * @description 消息已阅读标志
     *
     * @var bool
     */
    public $readFlag;
    protected $_name = [
        'receiverId' => 'ReceiverId',
        'readFlag'   => 'ReadFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }
        if (null !== $this->readFlag) {
            $res['ReadFlag'] = $this->readFlag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receiverUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }
        if (isset($map['ReadFlag'])) {
            $model->readFlag = $map['ReadFlag'];
        }

        return $model;
    }
}
