<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansDeductLogResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $savingsType;

    /**
     * @var string
     */
    public $billModule;

    /**
     * @var string
     */
    public $deductFee;

    /**
     * @var string
     */
    public $deductRate;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $deductCommodity;

    /**
     * @var string
     */
    public $deductInstanceId;

    /**
     * @var string
     */
    public $discountRate;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'savingsType'      => 'SavingsType',
        'billModule'       => 'BillModule',
        'deductFee'        => 'DeductFee',
        'deductRate'       => 'DeductRate',
        'userId'           => 'UserId',
        'deductCommodity'  => 'DeductCommodity',
        'deductInstanceId' => 'DeductInstanceId',
        'discountRate'     => 'DiscountRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->savingsType) {
            $res['SavingsType'] = $this->savingsType;
        }
        if (null !== $this->billModule) {
            $res['BillModule'] = $this->billModule;
        }
        if (null !== $this->deductFee) {
            $res['DeductFee'] = $this->deductFee;
        }
        if (null !== $this->deductRate) {
            $res['DeductRate'] = $this->deductRate;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->deductCommodity) {
            $res['DeductCommodity'] = $this->deductCommodity;
        }
        if (null !== $this->deductInstanceId) {
            $res['DeductInstanceId'] = $this->deductInstanceId;
        }
        if (null !== $this->discountRate) {
            $res['DiscountRate'] = $this->discountRate;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SavingsType'])) {
            $model->savingsType = $map['SavingsType'];
        }
        if (isset($map['BillModule'])) {
            $model->billModule = $map['BillModule'];
        }
        if (isset($map['DeductFee'])) {
            $model->deductFee = $map['DeductFee'];
        }
        if (isset($map['DeductRate'])) {
            $model->deductRate = $map['DeductRate'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DeductCommodity'])) {
            $model->deductCommodity = $map['DeductCommodity'];
        }
        if (isset($map['DeductInstanceId'])) {
            $model->deductInstanceId = $map['DeductInstanceId'];
        }
        if (isset($map['DiscountRate'])) {
            $model->discountRate = $map['DiscountRate'];
        }

        return $model;
    }
}
