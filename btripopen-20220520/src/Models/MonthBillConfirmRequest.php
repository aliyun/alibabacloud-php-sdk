<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class MonthBillConfirmRequest extends Model
{
    /**
     * @var int
     */
    public $mailBillDate;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'mailBillDate' => 'mail_bill_date',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mailBillDate) {
            $res['mail_bill_date'] = $this->mailBillDate;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['mail_bill_date'])) {
            $model->mailBillDate = $map['mail_bill_date'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
