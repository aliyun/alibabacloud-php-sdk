<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\QueryOrderResponseBody\data\itemInfo\dailyPrices\price;

use AlibabaCloud\Dara\Model;

class currency extends Model
{
    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var int
     */
    public $defaultFractionDigits;

    /**
     * @var int
     */
    public $numericCode;
    protected $_name = [
        'currencyCode' => 'CurrencyCode',
        'defaultFractionDigits' => 'DefaultFractionDigits',
        'numericCode' => 'NumericCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currencyCode) {
            $res['CurrencyCode'] = $this->currencyCode;
        }

        if (null !== $this->defaultFractionDigits) {
            $res['DefaultFractionDigits'] = $this->defaultFractionDigits;
        }

        if (null !== $this->numericCode) {
            $res['NumericCode'] = $this->numericCode;
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
        if (isset($map['CurrencyCode'])) {
            $model->currencyCode = $map['CurrencyCode'];
        }

        if (isset($map['DefaultFractionDigits'])) {
            $model->defaultFractionDigits = $map['DefaultFractionDigits'];
        }

        if (isset($map['NumericCode'])) {
            $model->numericCode = $map['NumericCode'];
        }

        return $model;
    }
}
