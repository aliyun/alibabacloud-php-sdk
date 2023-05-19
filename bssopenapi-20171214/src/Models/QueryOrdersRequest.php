<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryOrdersRequest extends Model
{
    /**
     * @description The end time of the period during which the orders were created. By default, orders within the last hour are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2016-05-23T12:00:00Z
     *
     * @var string
     */
    public $createTimeEnd;

    /**
     * @description The start time of the period during which the orders were created. By default, orders within the last hour are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2016-05-23T13:00:00Z
     *
     * @var string
     */
    public $createTimeStart;

    /**
     * @description The type of the order. Valid values:
     *
     *   New: purchases an instance.
     *   Renew: renews an instance.
     *   Upgrade: upgrades the configurations of an instance.
     *   Refund: applies for a refund.
     *
     * @example New
     *
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of payment. Valid values for a non-refund order:
     *
     *   Unpaid: The order is not paid.
     *   Paid: The order is paid.
     *   Cancelled: The order is canceled.
     *
     * > : You can set this parameter to NULL for a refund order.
     * @example Paid
     *
     * @var string
     */
    public $paymentStatus;

    /**
     * @description The code of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The type of the service.
     *
     * @example rds
     *
     * @var string
     */
    public $productType;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * @example Subscription
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'createTimeEnd'    => 'CreateTimeEnd',
        'createTimeStart'  => 'CreateTimeStart',
        'orderType'        => 'OrderType',
        'ownerId'          => 'OwnerId',
        'pageNum'          => 'PageNum',
        'pageSize'         => 'PageSize',
        'paymentStatus'    => 'PaymentStatus',
        'productCode'      => 'ProductCode',
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }
        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->paymentStatus) {
            $res['PaymentStatus'] = $this->paymentStatus;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }
        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PaymentStatus'])) {
            $model->paymentStatus = $map['PaymentStatus'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
