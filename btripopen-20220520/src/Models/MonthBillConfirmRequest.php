<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class MonthBillConfirmRequest extends Model
{
    /**
     * @example 20221001
     *
     * @var int
     */
    public $mailBillDate;

    /**
     * @example 12345
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'mailBillDate' => 'mail_bill_date',
        'userId'       => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return MonthBillConfirmRequest
     */
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
