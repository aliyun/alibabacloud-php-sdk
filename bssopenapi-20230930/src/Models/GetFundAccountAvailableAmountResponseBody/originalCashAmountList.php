<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountAvailableAmountResponseBody;

use AlibabaCloud\Tea\Model;

class originalCashAmountList extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $amount;

    /**
     * @example USD
     *
     * @var string
     */
    public $currency;
    protected $_name = [
        'amount' => 'Amount',
        'currency' => 'Currency',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return originalCashAmountList
     */
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
