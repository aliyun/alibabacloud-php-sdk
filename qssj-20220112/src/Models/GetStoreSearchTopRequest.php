<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetStoreSearchTopRequest extends Model
{
    /**
     * @var string
     */
    public $brandNames;

    /**
     * @example [1623]
     *
     * @var string
     */
    public $cateIds;

    /**
     * @var string
     */
    public $endingDate;

    /**
     * @var string
     */
    public $endingPrice;

    /**
     * @var string
     */
    public $endingSalesVolume;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $shopIds;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $startPrice;

    /**
     * @var string
     */
    public $startSalesVolume;
    protected $_name = [
        'brandNames'        => 'BrandNames',
        'cateIds'           => 'CateIds',
        'endingDate'        => 'EndingDate',
        'endingPrice'       => 'EndingPrice',
        'endingSalesVolume' => 'EndingSalesVolume',
        'pageIndex'         => 'PageIndex',
        'shopIds'           => 'ShopIds',
        'startDate'         => 'StartDate',
        'startPrice'        => 'StartPrice',
        'startSalesVolume'  => 'StartSalesVolume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandNames) {
            $res['BrandNames'] = $this->brandNames;
        }
        if (null !== $this->cateIds) {
            $res['CateIds'] = $this->cateIds;
        }
        if (null !== $this->endingDate) {
            $res['EndingDate'] = $this->endingDate;
        }
        if (null !== $this->endingPrice) {
            $res['EndingPrice'] = $this->endingPrice;
        }
        if (null !== $this->endingSalesVolume) {
            $res['EndingSalesVolume'] = $this->endingSalesVolume;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->shopIds) {
            $res['ShopIds'] = $this->shopIds;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->startPrice) {
            $res['StartPrice'] = $this->startPrice;
        }
        if (null !== $this->startSalesVolume) {
            $res['StartSalesVolume'] = $this->startSalesVolume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStoreSearchTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrandNames'])) {
            $model->brandNames = $map['BrandNames'];
        }
        if (isset($map['CateIds'])) {
            $model->cateIds = $map['CateIds'];
        }
        if (isset($map['EndingDate'])) {
            $model->endingDate = $map['EndingDate'];
        }
        if (isset($map['EndingPrice'])) {
            $model->endingPrice = $map['EndingPrice'];
        }
        if (isset($map['EndingSalesVolume'])) {
            $model->endingSalesVolume = $map['EndingSalesVolume'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['ShopIds'])) {
            $model->shopIds = $map['ShopIds'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['StartPrice'])) {
            $model->startPrice = $map['StartPrice'];
        }
        if (isset($map['StartSalesVolume'])) {
            $model->startSalesVolume = $map['StartSalesVolume'];
        }

        return $model;
    }
}
