<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var float
     */
    public $postpaidCost;

    /**
     * @var float
     */
    public $coveragePercentage;

    /**
     * @var string
     */
    public $region;

    /**
     * @var float
     */
    public $deductAmount;

    /**
     * @var string
     */
    public $startPeriod;

    /**
     * @var float
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $endPeriod;
    protected $_name = [
        'userId'             => 'UserId',
        'instanceId'         => 'InstanceId',
        'currency'           => 'Currency',
        'instanceSpec'       => 'InstanceSpec',
        'postpaidCost'       => 'PostpaidCost',
        'coveragePercentage' => 'CoveragePercentage',
        'region'             => 'Region',
        'deductAmount'       => 'DeductAmount',
        'startPeriod'        => 'StartPeriod',
        'totalAmount'        => 'TotalAmount',
        'userName'           => 'UserName',
        'endPeriod'          => 'EndPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->coveragePercentage) {
            $res['CoveragePercentage'] = $this->coveragePercentage;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->deductAmount) {
            $res['DeductAmount'] = $this->deductAmount;
        }
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['CoveragePercentage'])) {
            $model->coveragePercentage = $map['CoveragePercentage'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['DeductAmount'])) {
            $model->deductAmount = $map['DeductAmount'];
        }
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }

        return $model;
    }
}
