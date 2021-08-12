<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $accountID;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var items
     */
    public $items;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'billingCycle' => 'BillingCycle',
        'maxResults'   => 'MaxResults',
        'accountID'    => 'AccountID',
        'totalCount'   => 'TotalCount',
        'accountName'  => 'AccountName',
        'items'        => 'Items',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->accountID) {
            $res['AccountID'] = $this->accountID;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['AccountID'])) {
            $model->accountID = $map['AccountID'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}
