<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySettleBillResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 185xxxxx489
     *
     * @var string
     */
    public $accountID;

    /**
     * @example test@test.aliyunid.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 2020-02
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @var items
     */
    public $items;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example CAESEgoQCg4KCmdtdF9jcmVhdGUQARgBIkgKCQBwhGmPcAEAAAo7AzYAAAAxTDgwMDcxMjg3ZDJhNmM3ZDguTDgwMDAwMDAwMDAwMzE1MTIuTDgwMDcyZDMyZTJkYzg3N2U
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accountID'    => 'AccountID',
        'accountName'  => 'AccountName',
        'billingCycle' => 'BillingCycle',
        'items'        => 'Items',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
