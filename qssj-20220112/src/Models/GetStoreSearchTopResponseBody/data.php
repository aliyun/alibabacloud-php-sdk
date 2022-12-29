<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetStoreSearchTopResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $commodityQuantity;

    /**
     * @var int
     */
    public $salesVolume;

    /**
     * @var int
     */
    public $searchVolume;

    /**
     * @var int
     */
    public $shopId;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var float
     */
    public $totalSales;
    protected $_name = [
        'commodityQuantity' => 'CommodityQuantity',
        'salesVolume'       => 'SalesVolume',
        'searchVolume'      => 'SearchVolume',
        'shopId'            => 'ShopId',
        'shopName'          => 'ShopName',
        'totalSales'        => 'TotalSales',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityQuantity) {
            $res['CommodityQuantity'] = $this->commodityQuantity;
        }
        if (null !== $this->salesVolume) {
            $res['SalesVolume'] = $this->salesVolume;
        }
        if (null !== $this->searchVolume) {
            $res['SearchVolume'] = $this->searchVolume;
        }
        if (null !== $this->shopId) {
            $res['ShopId'] = $this->shopId;
        }
        if (null !== $this->shopName) {
            $res['ShopName'] = $this->shopName;
        }
        if (null !== $this->totalSales) {
            $res['TotalSales'] = $this->totalSales;
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
        if (isset($map['CommodityQuantity'])) {
            $model->commodityQuantity = $map['CommodityQuantity'];
        }
        if (isset($map['SalesVolume'])) {
            $model->salesVolume = $map['SalesVolume'];
        }
        if (isset($map['SearchVolume'])) {
            $model->searchVolume = $map['SearchVolume'];
        }
        if (isset($map['ShopId'])) {
            $model->shopId = $map['ShopId'];
        }
        if (isset($map['ShopName'])) {
            $model->shopName = $map['ShopName'];
        }
        if (isset($map['TotalSales'])) {
            $model->totalSales = $map['TotalSales'];
        }

        return $model;
    }
}
