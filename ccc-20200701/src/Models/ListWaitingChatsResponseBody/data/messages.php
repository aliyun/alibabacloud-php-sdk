<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody\data;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example c361765f-******-4e07-b81c-4b5d9183fac6
     *
     * @var string
     */
    public $senderId;

    /**
     * @var string
     */
    public $senderType;
    protected $_name = [
        'content' => 'Content',
        'senderId' => 'SenderId',
        'senderType' => 'SenderType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->senderId) {
            $res['SenderId'] = $this->senderId;
        }
        if (null !== $this->senderType) {
            $res['SenderType'] = $this->senderType;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['SenderId'])) {
            $model->senderId = $map['SenderId'];
        }
        if (isset($map['SenderType'])) {
            $model->senderType = $map['SenderType'];
        }

        return $model;
    }
}
