<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data\pricing;

use AlibabaCloud\Dara\Model;

class nightlyPrices extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'amount' => 'Amount',
        'date' => 'Date',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
            $model->amount = $map['Amount'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
