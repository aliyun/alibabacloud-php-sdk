<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1857xxxxx489
     *
     * @var string
     */
    public $accountID;

    /**
     * @description The number of entries returned per page.
     *
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The data returned.
     *
     * @example 2020-03
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The total number of returned entries.
     *
     * @var items
     */
    public $items;

    /**
     * @description Indicates whether the request is successful.
     *
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
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accountID'    => 'AccountID',
        'accountName'  => 'AccountName',
        'billingCycle' => 'BillingCycle',
        'items'        => 'Items',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountID) {
            $res['AccountID'] = $this->accountID;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AccountID'])) {
            $model->accountID = $map['AccountID'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
