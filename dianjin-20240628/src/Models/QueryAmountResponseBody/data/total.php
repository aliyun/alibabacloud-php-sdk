<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\QueryAmountResponseBody\data;

use AlibabaCloud\Dara\Model;

class total extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $listFee;

    /**
     * @var string
     */
    public $totalAmount;
    protected $_name = [
        'amount' => 'amount',
        'listFee' => 'listFee',
        'totalAmount' => 'totalAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->listFee) {
            $res['listFee'] = $this->listFee;
        }

        if (null !== $this->totalAmount) {
            $res['totalAmount'] = $this->totalAmount;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['listFee'])) {
            $model->listFee = $map['listFee'];
        }

        if (isset($map['totalAmount'])) {
            $model->totalAmount = $map['totalAmount'];
        }

        return $model;
    }
}
