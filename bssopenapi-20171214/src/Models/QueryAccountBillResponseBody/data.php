<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponseBody\data\items;

class data extends Model
{
    /**
     * @var string
     */
    public $accountID;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var items
     */
    public $items;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accountID' => 'AccountID',
        'accountName' => 'AccountName',
        'billingCycle' => 'BillingCycle',
        'items' => 'Items',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->items) {
            $this->items->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
