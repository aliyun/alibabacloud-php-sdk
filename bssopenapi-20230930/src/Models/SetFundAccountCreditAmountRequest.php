<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SetFundAccountCreditAmountRequest extends Model
{
    /**
     * @var string
     */
    public $cancelCredit;

    /**
     * @var string
     */
    public $creditAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var int
     */
    public $fundAccountId;
    protected $_name = [
        'cancelCredit' => 'CancelCredit',
        'creditAmount' => 'CreditAmount',
        'currency' => 'Currency',
        'fundAccountId' => 'FundAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelCredit) {
            $res['CancelCredit'] = $this->cancelCredit;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CancelCredit'])) {
            $model->cancelCredit = $map['CancelCredit'];
        }

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
