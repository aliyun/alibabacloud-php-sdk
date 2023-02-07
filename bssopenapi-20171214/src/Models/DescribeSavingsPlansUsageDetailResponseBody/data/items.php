<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The used amount of the savings plan.
     *
     * @example 3.94
     *
     * @var float
     */
    public $deductValue;

    /**
     * @description The end time.
     *
     * @example 2021-08-09 00:00:00
     *
     * @var string
     */
    public $endPeriod;

    /**
     * @description The ID of the instance.
     *
     * @example spn-a1fhs54c243hP22
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The total amount of the savings plan.
     *
     * @example 29.84
     *
     * @var float
     */
    public $poolValue;

    /**
     * @description The pay-as-you-go cost.
     *
     * @example 4.2
     *
     * @var float
     */
    public $postpaidCost;

    /**
     * @description The amount that is saved.
     *
     * @example 0.08
     *
     * @var float
     */
    public $savedCost;

    /**
     * @description The start time.
     *
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $startPeriod;

    /**
     * @description The status of the instance.
     *
     * A value of -1 indicates that the payment is overdue. A value of 1 indicates that the instance is active.
     * @example -1
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the savings plan. Valid values: universal and ECS compute.
     *
     * @var string
     */
    public $type;

    /**
     * @description The usage.
     *
     * @example 0.9
     *
     * @var float
     */
    public $usagePercentage;

    /**
     * @description The ID of the account.
     *
     * @example 123745698925000
     *
     * @var int
     */
    public $userId;

    /**
     * @description The username of the account.
     *
     * @example test13@test.aliyun.com
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'currency'        => 'Currency',
        'deductValue'     => 'DeductValue',
        'endPeriod'       => 'EndPeriod',
        'instanceId'      => 'InstanceId',
        'poolValue'       => 'PoolValue',
        'postpaidCost'    => 'PostpaidCost',
        'savedCost'       => 'SavedCost',
        'startPeriod'     => 'StartPeriod',
        'status'          => 'Status',
        'type'            => 'Type',
        'usagePercentage' => 'UsagePercentage',
        'userId'          => 'UserId',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deductValue) {
            $res['DeductValue'] = $this->deductValue;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->poolValue) {
            $res['PoolValue'] = $this->poolValue;
        }
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->savedCost) {
            $res['SavedCost'] = $this->savedCost;
        }
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usagePercentage) {
            $res['UsagePercentage'] = $this->usagePercentage;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeductValue'])) {
            $model->deductValue = $map['DeductValue'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PoolValue'])) {
            $model->poolValue = $map['PoolValue'];
        }
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['SavedCost'])) {
            $model->savedCost = $map['SavedCost'];
        }
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UsagePercentage'])) {
            $model->usagePercentage = $map['UsagePercentage'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
