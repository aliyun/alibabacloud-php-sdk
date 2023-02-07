<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The coverage.
     *
     * @example 0.9
     *
     * @var float
     */
    public $coveragePercentage;

    /**
     * @description The currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The deducted amount.
     *
     * @example 100
     *
     * @var float
     */
    public $deductAmount;

    /**
     * @description The end time.
     *
     * @example 2021-05-05 15:00:00
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
     * @description The specifications.
     *
     * @example 7th_generation_X86_group
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description The pay-as-you-go cost.
     *
     * @example 200
     *
     * @var float
     */
    public $postpaidCost;

    /**
     * @description The region.
     *
     * @var string
     */
    public $region;

    /**
     * @description The start time.
     *
     * @example 2021-05-05 14:00:00
     *
     * @var string
     */
    public $startPeriod;

    /**
     * @description The total expenditure.
     *
     * @example 100
     *
     * @var float
     */
    public $totalAmount;

    /**
     * @description The ID of the account.
     *
     * @example 2831685687844416
     *
     * @var int
     */
    public $userId;

    /**
     * @description The username of the account.
     *
     * @example tester1@test.aliyun.com
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'coveragePercentage' => 'CoveragePercentage',
        'currency'           => 'Currency',
        'deductAmount'       => 'DeductAmount',
        'endPeriod'          => 'EndPeriod',
        'instanceId'         => 'InstanceId',
        'instanceSpec'       => 'InstanceSpec',
        'postpaidCost'       => 'PostpaidCost',
        'region'             => 'Region',
        'startPeriod'        => 'StartPeriod',
        'totalAmount'        => 'TotalAmount',
        'userId'             => 'UserId',
        'userName'           => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coveragePercentage) {
            $res['CoveragePercentage'] = $this->coveragePercentage;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->deductAmount) {
            $res['DeductAmount'] = $this->deductAmount;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
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
        if (isset($map['CoveragePercentage'])) {
            $model->coveragePercentage = $map['CoveragePercentage'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DeductAmount'])) {
            $model->deductAmount = $map['DeductAmount'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
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
