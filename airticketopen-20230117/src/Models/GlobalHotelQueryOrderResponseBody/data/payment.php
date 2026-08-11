<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\payment\amount;

class payment extends Model
{
    /**
     * @var amount
     */
    public $amount;

    /**
     * @var string
     */
    public $gmtPaid;

    /**
     * @var string
     */
    public $paymentMethod;

    /**
     * @var string
     */
    public $paymentTransactionId;
    protected $_name = [
        'amount' => 'Amount',
        'gmtPaid' => 'GmtPaid',
        'paymentMethod' => 'PaymentMethod',
        'paymentTransactionId' => 'PaymentTransactionId',
    ];

    public function validate()
    {
        if (null !== $this->amount) {
            $this->amount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = null !== $this->amount ? $this->amount->toArray($noStream) : $this->amount;
        }

        if (null !== $this->gmtPaid) {
            $res['GmtPaid'] = $this->gmtPaid;
        }

        if (null !== $this->paymentMethod) {
            $res['PaymentMethod'] = $this->paymentMethod;
        }

        if (null !== $this->paymentTransactionId) {
            $res['PaymentTransactionId'] = $this->paymentTransactionId;
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
        if (isset($map['Amount'])) {
            $model->amount = amount::fromMap($map['Amount']);
        }

        if (isset($map['GmtPaid'])) {
            $model->gmtPaid = $map['GmtPaid'];
        }

        if (isset($map['PaymentMethod'])) {
            $model->paymentMethod = $map['PaymentMethod'];
        }

        if (isset($map['PaymentTransactionId'])) {
            $model->paymentTransactionId = $map['PaymentTransactionId'];
        }

        return $model;
    }
}
