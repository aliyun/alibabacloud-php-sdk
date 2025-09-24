<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillRequest\tagFilter;

class DescribeSplitItemBillRequest extends Model
{
    /**
     * @var int
     */
    public $billOwnerId;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $billingDate;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var bool
     */
    public $isHideZeroCharge;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pipCode;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $splitItemID;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var tagFilter[]
     */
    public $tagFilter;
    protected $_name = [
        'billOwnerId' => 'BillOwnerId',
        'billingCycle' => 'BillingCycle',
        'billingDate' => 'BillingDate',
        'granularity' => 'Granularity',
        'instanceID' => 'InstanceID',
        'isHideZeroCharge' => 'IsHideZeroCharge',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerId' => 'OwnerId',
        'pipCode' => 'PipCode',
        'productCode' => 'ProductCode',
        'productType' => 'ProductType',
        'splitItemID' => 'SplitItemID',
        'subscriptionType' => 'SubscriptionType',
        'tagFilter' => 'TagFilter',
    ];

    public function validate()
    {
        if (\is_array($this->tagFilter)) {
            Model::validateArray($this->tagFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->isHideZeroCharge) {
            $res['IsHideZeroCharge'] = $this->isHideZeroCharge;
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

        if (null !== $this->pipCode) {
            $res['PipCode'] = $this->pipCode;
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
            if (\is_array($this->tagFilter)) {
                $res['TagFilter'] = [];
                $n1 = 0;
                foreach ($this->tagFilter as $item1) {
                    $res['TagFilter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['IsHideZeroCharge'])) {
            $model->isHideZeroCharge = $map['IsHideZeroCharge'];
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

        if (isset($map['PipCode'])) {
            $model->pipCode = $map['PipCode'];
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
                $n1 = 0;
                foreach ($map['TagFilter'] as $item1) {
                    $model->tagFilter[$n1] = tagFilter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
