<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\ChangeConfirmResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 30
     *
     * @var float
     */
    public $payAmount;

    /**
     * @example hkduendkd-2023-dj0
     *
     * @var string
     */
    public $transactionNo;
    protected $_name = [
        'payAmount'     => 'pay_amount',
        'transactionNo' => 'transaction_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payAmount) {
            $res['pay_amount'] = $this->payAmount;
        }
        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pay_amount'])) {
            $model->payAmount = $map['pay_amount'];
        }
        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }

        return $model;
    }
}
