<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\QueryReimbursementOrderResponseBody\module;

use AlibabaCloud\Tea\Model;

class paymentInfos extends Model
{
    /**
     * @example 20.00
     *
     * @var string
     */
    public $amount;

    /**
     * @example userId
     *
     * @var string
     */
    public $payeeUserId;
    protected $_name = [
        'amount'      => 'amount',
        'payeeUserId' => 'payee_user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->payeeUserId) {
            $res['payee_user_id'] = $this->payeeUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paymentInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['payee_user_id'])) {
            $model->payeeUserId = $map['payee_user_id'];
        }

        return $model;
    }
}
