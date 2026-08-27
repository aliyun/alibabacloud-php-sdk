<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data;

use AlibabaCloud\Dara\Model;

class costTotals extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $pretaxAmount;

    /**
     * @var string
     */
    public $taxAmount;
    protected $_name = [
        'amount' => 'amount',
        'currency' => 'currency',
        'pretaxAmount' => 'pretaxAmount',
        'taxAmount' => 'taxAmount',
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

        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->pretaxAmount) {
            $res['pretaxAmount'] = $this->pretaxAmount;
        }

        if (null !== $this->taxAmount) {
            $res['taxAmount'] = $this->taxAmount;
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

        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['pretaxAmount'])) {
            $model->pretaxAmount = $map['pretaxAmount'];
        }

        if (isset($map['taxAmount'])) {
            $model->taxAmount = $map['taxAmount'];
        }

        return $model;
    }
}
