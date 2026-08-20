<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryPriceStockResponseBody\data\calendarPriceStocks;

use AlibabaCloud\Dara\Model;

class distributionPrice extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $currencyCode;
    protected $_name = [
        'amount' => 'Amount',
        'currencyCode' => 'CurrencyCode',
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

        if (null !== $this->currencyCode) {
            $res['CurrencyCode'] = $this->currencyCode;
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

        if (isset($map['CurrencyCode'])) {
            $model->currencyCode = $map['CurrencyCode'];
        }

        return $model;
    }
}
