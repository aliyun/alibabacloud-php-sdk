<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList\cskuPriceList;

use AlibabaCloud\Tea\Model;

class rangeList extends Model
{
    /**
     * @var string
     */
    public $factorCode;

    /**
     * @example 10
     *
     * @var string
     */
    public $max;

    /**
     * @example 1
     *
     * @var string
     */
    public $min;

    /**
     * @example LORC
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'factorCode' => 'FactorCode',
        'max'        => 'Max',
        'min'        => 'Min',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rangeList
     */
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
