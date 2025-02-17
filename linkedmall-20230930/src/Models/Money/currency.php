<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models\Money;

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
     * @var string
     */
    public $displayName;
    /**
     * @var int
     */
    public $numericCode;
    /**
     * @var string
     */
    public $symbol;
    protected $_name = [
        'currencyCode'          => 'currencyCode',
        'defaultFractionDigits' => 'defaultFractionDigits',
        'displayName'           => 'displayName',
        'numericCode'           => 'numericCode',
        'symbol'                => 'symbol',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currencyCode) {
            $res['currencyCode'] = $this->currencyCode;
        }

        if (null !== $this->defaultFractionDigits) {
            $res['defaultFractionDigits'] = $this->defaultFractionDigits;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->numericCode) {
            $res['numericCode'] = $this->numericCode;
        }

        if (null !== $this->symbol) {
            $res['symbol'] = $this->symbol;
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
        if (isset($map['currencyCode'])) {
            $model->currencyCode = $map['currencyCode'];
        }

        if (isset($map['defaultFractionDigits'])) {
            $model->defaultFractionDigits = $map['defaultFractionDigits'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['numericCode'])) {
            $model->numericCode = $map['numericCode'];
        }

        if (isset($map['symbol'])) {
            $model->symbol = $map['symbol'];
        }

        return $model;
    }
}
