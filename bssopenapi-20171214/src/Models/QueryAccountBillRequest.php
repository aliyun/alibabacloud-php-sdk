<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryAccountBillRequest extends Model
{
    /**
     * @description Specifies whether to summarize bills based on service codes. Valid values:
     *
     *   true: summarizes bills based on service codes.
     *   false: does not summarize bills based on service codes.
     *
     * Default value: false.
     * @example 122
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @example 2018-07
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The ID of the member. If you specify a value for this parameter, you can query the bills of the specified member. If you leave this parameter empty, the bills of the current account are queried by default.
     *
     * @example 2021-06-01
     *
     * @var string
     */
    public $billingDate;

    /**
     * @description The code of the service.
     *
     * @example Monthly
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example false
     *
     * @var bool
     */
    public $isGroupByProduct;

    /**
     * @var int
     */
    public $ownerID;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The billing cycle. Format: YYYY-MM.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries to return on each page. Default value: 20. Maximum value: 300.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'billOwnerId'      => 'BillOwnerId',
        'billingCycle'     => 'BillingCycle',
        'billingDate'      => 'BillingDate',
        'granularity'      => 'Granularity',
        'isGroupByProduct' => 'IsGroupByProduct',
        'ownerID'          => 'OwnerID',
        'pageNum'          => 'PageNum',
        'pageSize'         => 'PageSize',
        'productCode'      => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->isGroupByProduct) {
            $res['IsGroupByProduct'] = $this->isGroupByProduct;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAccountBillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['IsGroupByProduct'])) {
            $model->isGroupByProduct = $map['IsGroupByProduct'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
