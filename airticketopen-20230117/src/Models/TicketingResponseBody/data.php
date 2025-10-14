<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketingResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $orderNum;

    /**
     * @var int
     */
    public $payTime;

    /**
     * @var string
     */
    public $transactionNo;
    protected $_name = [
        'orderNum' => 'order_num',
        'payTime' => 'pay_time',
        'transactionNo' => 'transaction_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderNum) {
            $res['order_num'] = $this->orderNum;
        }

        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }

        if (null !== $this->transactionNo) {
            $res['transaction_no'] = $this->transactionNo;
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
        if (isset($map['order_num'])) {
            $model->orderNum = $map['order_num'];
        }

        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }

        if (isset($map['transaction_no'])) {
            $model->transactionNo = $map['transaction_no'];
        }

        return $model;
    }
}
