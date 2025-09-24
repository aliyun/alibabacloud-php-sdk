<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansCoverageDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var float
     */
    public $coveragePercentage;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $deductAmount;

    /**
     * @var string
     */
    public $endPeriod;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var float
     */
    public $postpaidCost;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $startPeriod;

    /**
     * @var float
     */
    public $totalAmount;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'coveragePercentage' => 'CoveragePercentage',
        'currency' => 'Currency',
        'deductAmount' => 'DeductAmount',
        'endPeriod' => 'EndPeriod',
        'instanceId' => 'InstanceId',
        'instanceSpec' => 'InstanceSpec',
        'ownerId' => 'OwnerId',
        'postpaidCost' => 'PostpaidCost',
        'region' => 'Region',
        'startPeriod' => 'StartPeriod',
        'totalAmount' => 'TotalAmount',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
