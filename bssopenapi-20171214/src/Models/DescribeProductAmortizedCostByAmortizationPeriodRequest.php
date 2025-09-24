<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class DescribeProductAmortizedCostByAmortizationPeriodRequest extends Model
{
    /**
     * @var string[]
     */
    public $billOwnerIdList;

    /**
     * @var string[]
     */
    public $billUserIdList;

    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string[]
     */
    public $consumePeriodFilter;

    /**
     * @var string
     */
    public $costUnitCode;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productDetail;

    /**
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'billOwnerIdList' => 'BillOwnerIdList',
        'billUserIdList' => 'BillUserIdList',
        'billingCycle' => 'BillingCycle',
        'consumePeriodFilter' => 'ConsumePeriodFilter',
        'costUnitCode' => 'CostUnitCode',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'productCode' => 'ProductCode',
        'productDetail' => 'ProductDetail',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
        if (\is_array($this->billOwnerIdList)) {
            Model::validateArray($this->billOwnerIdList);
        }
        if (\is_array($this->billUserIdList)) {
            Model::validateArray($this->billUserIdList);
        }
        if (\is_array($this->consumePeriodFilter)) {
            Model::validateArray($this->consumePeriodFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billOwnerIdList) {
            if (\is_array($this->billOwnerIdList)) {
                $res['BillOwnerIdList'] = [];
                $n1 = 0;
                foreach ($this->billOwnerIdList as $item1) {
                    $res['BillOwnerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->billUserIdList) {
            if (\is_array($this->billUserIdList)) {
                $res['BillUserIdList'] = [];
                $n1 = 0;
                foreach ($this->billUserIdList as $item1) {
                    $res['BillUserIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        if (null !== $this->consumePeriodFilter) {
            if (\is_array($this->consumePeriodFilter)) {
                $res['ConsumePeriodFilter'] = [];
                $n1 = 0;
                foreach ($this->consumePeriodFilter as $item1) {
                    $res['ConsumePeriodFilter'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->costUnitCode) {
            $res['CostUnitCode'] = $this->costUnitCode;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }

        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
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
        if (isset($map['BillOwnerIdList'])) {
            if (!empty($map['BillOwnerIdList'])) {
                $model->billOwnerIdList = [];
                $n1 = 0;
                foreach ($map['BillOwnerIdList'] as $item1) {
                    $model->billOwnerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BillUserIdList'])) {
            if (!empty($map['BillUserIdList'])) {
                $model->billUserIdList = [];
                $n1 = 0;
                foreach ($map['BillUserIdList'] as $item1) {
                    $model->billUserIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        if (isset($map['ConsumePeriodFilter'])) {
            if (!empty($map['ConsumePeriodFilter'])) {
                $model->consumePeriodFilter = [];
                $n1 = 0;
                foreach ($map['ConsumePeriodFilter'] as $item1) {
                    $model->consumePeriodFilter[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CostUnitCode'])) {
            $model->costUnitCode = $map['CostUnitCode'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }

        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
