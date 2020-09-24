<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponse\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $billingCycle;

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
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var items
     */
    public $items;
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'accountID'    => 'AccountID',
        'accountName'  => 'AccountName',
        'nextToken'    => 'NextToken',
        'maxResults'   => 'MaxResults',
        'totalCount'   => 'TotalCount',
        'items'        => 'Items',
    ];

    public function validate()
    {
        Model::validateRequired('billingCycle', $this->billingCycle, true);
        Model::validateRequired('accountID', $this->accountID, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('maxResults', $this->maxResults, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('items', $this->items, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->accountID) {
            $res['AccountID'] = $this->accountID;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['AccountID'])) {
            $model->accountID = $map['AccountID'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        return $model;
    }
}
