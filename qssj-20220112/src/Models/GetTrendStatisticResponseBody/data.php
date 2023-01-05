<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetTrendStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $brandCount;

    /**
     * @example 66417189
     *
     * @var int
     */
    public $commodityCount;

    /**
     * @var int
     */
    public $exposureValue;

    /**
     * @var int
     */
    public $hits;

    /**
     * @example 3145796461.2734184
     *
     * @var float
     */
    public $sales;

    /**
     * @var int
     */
    public $salesVolume;

    /**
     * @example 1936264
     *
     * @var int
     */
    public $shopCount;
    protected $_name = [
        'brandCount'     => 'BrandCount',
        'commodityCount' => 'CommodityCount',
        'exposureValue'  => 'ExposureValue',
        'hits'           => 'Hits',
        'sales'          => 'Sales',
        'salesVolume'    => 'SalesVolume',
        'shopCount'      => 'ShopCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandCount) {
            $res['BrandCount'] = $this->brandCount;
        }
        if (null !== $this->commodityCount) {
            $res['CommodityCount'] = $this->commodityCount;
        }
        if (null !== $this->exposureValue) {
            $res['ExposureValue'] = $this->exposureValue;
        }
        if (null !== $this->hits) {
            $res['Hits'] = $this->hits;
        }
        if (null !== $this->sales) {
            $res['Sales'] = $this->sales;
        }
        if (null !== $this->salesVolume) {
            $res['SalesVolume'] = $this->salesVolume;
        }
        if (null !== $this->shopCount) {
            $res['ShopCount'] = $this->shopCount;
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
        if (isset($map['BrandCount'])) {
            $model->brandCount = $map['BrandCount'];
        }
        if (isset($map['CommodityCount'])) {
            $model->commodityCount = $map['CommodityCount'];
        }
        if (isset($map['ExposureValue'])) {
            $model->exposureValue = $map['ExposureValue'];
        }
        if (isset($map['Hits'])) {
            $model->hits = $map['Hits'];
        }
        if (isset($map['Sales'])) {
            $model->sales = $map['Sales'];
        }
        if (isset($map['SalesVolume'])) {
            $model->salesVolume = $map['SalesVolume'];
        }
        if (isset($map['ShopCount'])) {
            $model->shopCount = $map['ShopCount'];
        }

        return $model;
    }
}
