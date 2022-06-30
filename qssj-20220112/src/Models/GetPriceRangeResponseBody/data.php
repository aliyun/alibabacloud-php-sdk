<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetPriceRangeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $closingDate;

    /**
     * @var int
     */
    public $goodsSales;

    /**
     * @var string
     */
    public $priceRange;

    /**
     * @var float
     */
    public $salesVolume;
    protected $_name = [
        'closingDate' => 'ClosingDate',
        'goodsSales'  => 'GoodsSales',
        'priceRange'  => 'PriceRange',
        'salesVolume' => 'SalesVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->closingDate) {
            $res['ClosingDate'] = $this->closingDate;
        }
        if (null !== $this->goodsSales) {
            $res['GoodsSales'] = $this->goodsSales;
        }
        if (null !== $this->priceRange) {
            $res['PriceRange'] = $this->priceRange;
        }
        if (null !== $this->salesVolume) {
            $res['SalesVolume'] = $this->salesVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClosingDate'])) {
            $model->closingDate = $map['ClosingDate'];
        }
        if (isset($map['GoodsSales'])) {
            $model->goodsSales = $map['GoodsSales'];
        }
        if (isset($map['PriceRange'])) {
            $model->priceRange = $map['PriceRange'];
        }
        if (isset($map['SalesVolume'])) {
            $model->salesVolume = $map['SalesVolume'];
        }

        return $model;
    }
}
