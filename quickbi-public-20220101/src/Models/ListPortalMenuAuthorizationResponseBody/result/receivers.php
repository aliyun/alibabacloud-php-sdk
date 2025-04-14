<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListPortalMenuAuthorizationResponseBody\result;

use AlibabaCloud\Dara\Model;

class receivers extends Model
{
    /**
     * @var string
     */
    public $receiverId;

    /**
     * @var int
     */
    public $receiverType;
    protected $_name = [
        'receiverId' => 'ReceiverId',
        'receiverType' => 'ReceiverType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }

        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }

        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }

        return $model;
    }
}
