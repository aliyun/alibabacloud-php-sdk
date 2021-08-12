<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSavingsPlansUsageDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var float
     */
    public $usagePercentage;

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
     * @var float
     */
    public $postpaidCost;

    /**
     * @var float
     */
    public $deductValue;

    /**
     * @var string
     */
    public $startPeriod;

    /**
     * @var float
     */
    public $savedCost;

    /**
     * @var float
     */
    public $poolValue;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $endPeriod;
    protected $_name = [
        'status'          => 'Status',
        'type'            => 'Type',
        'usagePercentage' => 'UsagePercentage',
        'userId'          => 'UserId',
        'instanceId'      => 'InstanceId',
        'currency'        => 'Currency',
        'postpaidCost'    => 'PostpaidCost',
        'deductValue'     => 'DeductValue',
        'startPeriod'     => 'StartPeriod',
        'savedCost'       => 'SavedCost',
        'poolValue'       => 'PoolValue',
        'userName'        => 'UserName',
        'endPeriod'       => 'EndPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->postpaidCost) {
            $res['PostpaidCost'] = $this->postpaidCost;
        }
        if (null !== $this->deductValue) {
            $res['DeductValue'] = $this->deductValue;
        }
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }
        if (null !== $this->savedCost) {
            $res['SavedCost'] = $this->savedCost;
        }
        if (null !== $this->poolValue) {
            $res['PoolValue'] = $this->poolValue;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['PostpaidCost'])) {
            $model->postpaidCost = $map['PostpaidCost'];
        }
        if (isset($map['DeductValue'])) {
            $model->deductValue = $map['DeductValue'];
        }
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }
        if (isset($map['SavedCost'])) {
            $model->savedCost = $map['SavedCost'];
        }
        if (isset($map['PoolValue'])) {
            $model->poolValue = $map['PoolValue'];
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
