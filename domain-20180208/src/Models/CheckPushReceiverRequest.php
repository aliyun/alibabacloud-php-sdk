<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class CheckPushReceiverRequest extends Model
{
    /**
     * @var string
     */
    public $receiverAccount;
    protected $_name = [
        'receiverAccount' => 'ReceiverAccount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->receiverAccount) {
            $res['ReceiverAccount'] = $this->receiverAccount;
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
        if (isset($map['ReceiverAccount'])) {
            $model->receiverAccount = $map['ReceiverAccount'];
        }

        return $model;
    }
}
