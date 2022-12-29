<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetStyleOnlineRequest extends Model
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
     * @example 20220201
     *
     * @var string
     */
    public $endingDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example [571926]
     *
     * @var string
     */
    public $shopIds;

    /**
     * @example 20220101
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'brandNames' => 'BrandNames',
        'cateIds'    => 'CateIds',
        'endingDate' => 'EndingDate',
        'pageIndex'  => 'PageIndex',
        'shopIds'    => 'ShopIds',
        'startDate'  => 'StartDate',
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
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->shopIds) {
            $res['ShopIds'] = $this->shopIds;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStyleOnlineRequest
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
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['ShopIds'])) {
            $model->shopIds = $map['ShopIds'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
