<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody;

use AlibabaCloud\Dara\Model;

class originalCashAmountList extends Model
{
    /**
     * @var string
     */
    public $amount;
    /**
     * @var string
     */
    public $currency;
    protected $_name = [
        'amount'   => 'Amount',
        'currency' => 'Currency',
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

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
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

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        return $model;
    }
}
