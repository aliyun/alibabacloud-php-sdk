<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingTrendResponseBody\data\resultByTime;

use AlibabaCloud\Dara\Model;

class periodDetails extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $percentage;

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
        'key' => 'key',
        'name' => 'name',
        'percentage' => 'percentage',
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

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->percentage) {
            $res['percentage'] = $this->percentage;
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

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['percentage'])) {
            $model->percentage = $map['percentage'];
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
