<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList\cskuPriceList;

use AlibabaCloud\Dara\Model;

class rangeList extends Model
{
    /**
     * @var string
     */
    public $factorCode;

    /**
     * @var string
     */
    public $max;

    /**
     * @var string
     */
    public $min;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'factorCode' => 'FactorCode',
        'max' => 'Max',
        'min' => 'Min',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->factorCode) {
            $res['FactorCode'] = $this->factorCode;
        }

        if (null !== $this->max) {
            $res['Max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['Min'] = $this->min;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FactorCode'])) {
            $model->factorCode = $map['FactorCode'];
        }

        if (isset($map['Max'])) {
            $model->max = $map['Max'];
        }

        if (isset($map['Min'])) {
            $model->min = $map['Min'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
