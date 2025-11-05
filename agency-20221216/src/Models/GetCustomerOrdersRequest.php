<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class GetCustomerOrdersRequest extends Model
{
    /**
     * @var string
     */
    public $customerAccount;

    /**
     * @var string
     */
    public $customerManager;

    /**
     * @var int
     */
    public $customerUid;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderSource;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $timeType;
    protected $_name = [
        'customerAccount' => 'CustomerAccount',
        'customerManager' => 'CustomerManager',
        'customerUid' => 'CustomerUid',
        'endDate' => 'EndDate',
        'orderId' => 'OrderId',
        'orderSource' => 'OrderSource',
        'orderStatus' => 'OrderStatus',
        'orderType' => 'OrderType',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'productType' => 'ProductType',
        'startDate' => 'StartDate',
        'timeType' => 'TimeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerAccount) {
            $res['CustomerAccount'] = $this->customerAccount;
        }

        if (null !== $this->customerManager) {
            $res['CustomerManager'] = $this->customerManager;
        }

        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderSource) {
            $res['OrderSource'] = $this->orderSource;
        }

        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->timeType) {
            $res['TimeType'] = $this->timeType;
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
        if (isset($map['CustomerAccount'])) {
            $model->customerAccount = $map['CustomerAccount'];
        }

        if (isset($map['CustomerManager'])) {
            $model->customerManager = $map['CustomerManager'];
        }

        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderSource'])) {
            $model->orderSource = $map['OrderSource'];
        }

        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TimeType'])) {
            $model->timeType = $map['TimeType'];
        }

        return $model;
    }
}
