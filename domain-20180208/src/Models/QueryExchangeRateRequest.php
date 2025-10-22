<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class QueryExchangeRateRequest extends Model
{
    /**
     * @var string
     */
    public $fromCurrency;

    /**
     * @var string
     */
    public $toCurrency;
    protected $_name = [
        'fromCurrency' => 'FromCurrency',
        'toCurrency' => 'ToCurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromCurrency) {
            $res['FromCurrency'] = $this->fromCurrency;
        }

        if (null !== $this->toCurrency) {
            $res['ToCurrency'] = $this->toCurrency;
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
        if (isset($map['FromCurrency'])) {
            $model->fromCurrency = $map['FromCurrency'];
        }

        if (isset($map['ToCurrency'])) {
            $model->toCurrency = $map['ToCurrency'];
        }

        return $model;
    }
}
