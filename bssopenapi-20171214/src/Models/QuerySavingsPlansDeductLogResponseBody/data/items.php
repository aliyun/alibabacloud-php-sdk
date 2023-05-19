<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDeductLogResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The total number of entries.
     *
     * @var string
     */
    public $billModule;

    /**
     * @var string
     */
    public $deductCommodity;

    /**
     * @example 0.52
     *
     * @var string
     */
    public $deductFee;

    /**
     * @description The ID of the request.
     *
     * @example i-XXXXXXXXX
     *
     * @var string
     */
    public $deductInstanceId;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $deductRate;

    /**
     * @description The billable item for which the fee is deducted.
     *
     * @example 0.069
     *
     * @var string
     */
    public $discountRate;

    /**
     * @description The page number of the returned page.
     *
     * @example 2020-12-01 01:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The service for which the fee is deducted.
     *
     * @example spn-xxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1906589291020438
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the instance for which the fee is deducted.
     *
     * @example ecs
     *
     * @var string
     */
    public $savingsType;

    /**
     * @description The beginning of the billing cycle for which the fee is deducted. The time is in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 2020-12-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The number of the page to return.
     *
     * @example 1906589291020438
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'billModule'       => 'BillModule',
        'deductCommodity'  => 'DeductCommodity',
        'deductFee'        => 'DeductFee',
        'deductInstanceId' => 'DeductInstanceId',
        'deductRate'       => 'DeductRate',
        'discountRate'     => 'DiscountRate',
        'endTime'          => 'EndTime',
        'instanceId'       => 'InstanceId',
        'ownerId'          => 'OwnerId',
        'savingsType'      => 'SavingsType',
        'startTime'        => 'StartTime',
        'userId'           => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billModule) {
            $res['BillModule'] = $this->billModule;
        }
        if (null !== $this->deductCommodity) {
            $res['DeductCommodity'] = $this->deductCommodity;
        }
        if (null !== $this->deductFee) {
            $res['DeductFee'] = $this->deductFee;
        }
        if (null !== $this->deductInstanceId) {
            $res['DeductInstanceId'] = $this->deductInstanceId;
        }
        if (null !== $this->deductRate) {
            $res['DeductRate'] = $this->deductRate;
        }
        if (null !== $this->discountRate) {
            $res['DiscountRate'] = $this->discountRate;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->savingsType) {
            $res['SavingsType'] = $this->savingsType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillModule'])) {
            $model->billModule = $map['BillModule'];
        }
        if (isset($map['DeductCommodity'])) {
            $model->deductCommodity = $map['DeductCommodity'];
        }
        if (isset($map['DeductFee'])) {
            $model->deductFee = $map['DeductFee'];
        }
        if (isset($map['DeductInstanceId'])) {
            $model->deductInstanceId = $map['DeductInstanceId'];
        }
        if (isset($map['DeductRate'])) {
            $model->deductRate = $map['DeductRate'];
        }
        if (isset($map['DiscountRate'])) {
            $model->discountRate = $map['DiscountRate'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SavingsType'])) {
            $model->savingsType = $map['SavingsType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
