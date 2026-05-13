<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BillingBillTierDTO extends Model
{
    /**
     * @var string
     */
    public $dimValues;

    /**
     * @var float
     */
    public $payableAmount;

    /**
     * @var string
     */
    public $values;
    protected $_name = [
        'dimValues' => 'dimValues',
        'payableAmount' => 'payableAmount',
        'values' => 'values',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimValues) {
            $res['dimValues'] = $this->dimValues;
        }

        if (null !== $this->payableAmount) {
            $res['payableAmount'] = $this->payableAmount;
        }

        if (null !== $this->values) {
            $res['values'] = $this->values;
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
        if (isset($map['dimValues'])) {
            $model->dimValues = $map['dimValues'];
        }

        if (isset($map['payableAmount'])) {
            $model->payableAmount = $map['payableAmount'];
        }

        if (isset($map['values'])) {
            $model->values = $map['values'];
        }

        return $model;
    }
}
