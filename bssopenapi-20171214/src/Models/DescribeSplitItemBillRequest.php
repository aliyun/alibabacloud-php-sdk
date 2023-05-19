<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillRequest\tagFilter;
use AlibabaCloud\Tea\Model;

class DescribeSplitItemBillRequest extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @example 2020-03
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @example 2020-03-02
     *
     * @var string
     */
    public $billingDate;

    /**
     * @example Monthly
     *
     * @var string
     */
    public $granularity;

    /**
     * @example i-kjhdskjgshfdlkjfdh
     *
     * @var string
     */
    public $instanceID;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example CAESEgoQCg4KCmd
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @example i-kjhdskjgshfdlkjfdh
     *
     * @var string
     */
    public $splitItemID;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;

    /**
     * @var tagFilter[]
     */
    public $tagFilter;
    protected $_name = [
        'billOwnerId'      => 'BillOwnerId',
        'billingCycle'     => 'BillingCycle',
        'billingDate'      => 'BillingDate',
        'granularity'      => 'Granularity',
        'instanceID'       => 'InstanceID',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'ownerId'          => 'OwnerId',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'splitItemID'      => 'SplitItemID',
        'subscriptionType' => 'SubscriptionType',
        'tagFilter'        => 'TagFilter',
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
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->splitItemID) {
            $res['SplitItemID'] = $this->splitItemID;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->tagFilter) {
            $res['TagFilter'] = [];
            if (null !== $this->tagFilter && \is_array($this->tagFilter)) {
                $n = 0;
                foreach ($this->tagFilter as $item) {
                    $res['TagFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSplitItemBillRequest
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
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SplitItemID'])) {
            $model->splitItemID = $map['SplitItemID'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['TagFilter'])) {
            if (!empty($map['TagFilter'])) {
                $model->tagFilter = [];
                $n                = 0;
                foreach ($map['TagFilter'] as $item) {
                    $model->tagFilter[$n++] = null !== $item ? tagFilter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
