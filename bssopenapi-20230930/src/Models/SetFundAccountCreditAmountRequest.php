<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SetFundAccountCreditAmountRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 500
     *
     * @var string
     */
    public $creditAmount;

    /**
     * @description This parameter is required.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 1232312
     *
     * @var int
     */
    public $fundAccountId;
    protected $_name = [
        'creditAmount' => 'CreditAmount',
        'currency' => 'Currency',
        'fundAccountId' => 'FundAccountId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creditAmount) {
            $res['CreditAmount'] = $this->creditAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetFundAccountCreditAmountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreditAmount'])) {
            $model->creditAmount = $map['CreditAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }

        return $model;
    }
}
