<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetStyleTopRequest extends Model
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
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $shopIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $startPrice;

    /**
     * @example 6
     *
     * @var int
     */
    public $timeDisplay;
    protected $_name = [
        'brandNames'  => 'BrandNames',
        'cateIds'     => 'CateIds',
        'endingDate'  => 'EndingDate',
        'endingPrice' => 'EndingPrice',
        'pageIndex'   => 'PageIndex',
        'shopIds'     => 'ShopIds',
        'sortOrder'   => 'SortOrder',
        'startDate'   => 'StartDate',
        'startPrice'  => 'StartPrice',
        'timeDisplay' => 'TimeDisplay',
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
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->shopIds) {
            $res['ShopIds'] = $this->shopIds;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->startPrice) {
            $res['StartPrice'] = $this->startPrice;
        }
        if (null !== $this->timeDisplay) {
            $res['TimeDisplay'] = $this->timeDisplay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStyleTopRequest
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
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['ShopIds'])) {
            $model->shopIds = $map['ShopIds'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['StartPrice'])) {
            $model->startPrice = $map['StartPrice'];
        }
        if (isset($map['TimeDisplay'])) {
            $model->timeDisplay = $map['TimeDisplay'];
        }

        return $model;
    }
}
