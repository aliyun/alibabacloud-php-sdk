<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody\data\items\tags;

class items extends Model
{
    /**
     * @var string
     */
    public $allocationStatus;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $currentPoolValue;

    /**
     * @var string
     */
    public $cycle;

    /**
     * @var string
     */
    public $deductCycleType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $instanceFamily;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lastBillTotalUsage;

    /**
     * @var string
     */
    public $lastBillUtilization;

    /**
     * @var string
     */
    public $payMode;

    /**
     * @var string
     */
    public $poolValue;

    /**
     * @var string
     */
    public $prepayFee;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $restPoolValue;

    /**
     * @var string
     */
    public $savingsType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $totalSave;

    /**
     * @var string
     */
    public $utilization;
    protected $_name = [
        'allocationStatus' => 'AllocationStatus',
        'commodityCode' => 'CommodityCode',
        'currency' => 'Currency',
        'currentPoolValue' => 'CurrentPoolValue',
        'cycle' => 'Cycle',
        'deductCycleType' => 'DeductCycleType',
        'endTime' => 'EndTime',
        'endTimestamp' => 'EndTimestamp',
        'instanceFamily' => 'InstanceFamily',
        'instanceId' => 'InstanceId',
        'lastBillTotalUsage' => 'LastBillTotalUsage',
        'lastBillUtilization' => 'LastBillUtilization',
        'payMode' => 'PayMode',
        'poolValue' => 'PoolValue',
        'prepayFee' => 'PrepayFee',
        'region' => 'Region',
        'restPoolValue' => 'RestPoolValue',
        'savingsType' => 'SavingsType',
        'startTime' => 'StartTime',
        'startTimestamp' => 'StartTimestamp',
        'status' => 'Status',
        'tags' => 'Tags',
        'totalSave' => 'TotalSave',
        'utilization' => 'Utilization',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }

        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->currentPoolValue) {
            $res['CurrentPoolValue'] = $this->currentPoolValue;
        }

        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }

        if (null !== $this->deductCycleType) {
            $res['DeductCycleType'] = $this->deductCycleType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->instanceFamily) {
            $res['InstanceFamily'] = $this->instanceFamily;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastBillTotalUsage) {
            $res['LastBillTotalUsage'] = $this->lastBillTotalUsage;
        }

        if (null !== $this->lastBillUtilization) {
            $res['LastBillUtilization'] = $this->lastBillUtilization;
        }

        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
        }

        if (null !== $this->poolValue) {
            $res['PoolValue'] = $this->poolValue;
        }

        if (null !== $this->prepayFee) {
            $res['PrepayFee'] = $this->prepayFee;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->restPoolValue) {
            $res['RestPoolValue'] = $this->restPoolValue;
        }

        if (null !== $this->savingsType) {
            $res['SavingsType'] = $this->savingsType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalSave) {
            $res['TotalSave'] = $this->totalSave;
        }

        if (null !== $this->utilization) {
            $res['Utilization'] = $this->utilization;
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
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }

        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['CurrentPoolValue'])) {
            $model->currentPoolValue = $map['CurrentPoolValue'];
        }

        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }

        if (isset($map['DeductCycleType'])) {
            $model->deductCycleType = $map['DeductCycleType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['InstanceFamily'])) {
            $model->instanceFamily = $map['InstanceFamily'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastBillTotalUsage'])) {
            $model->lastBillTotalUsage = $map['LastBillTotalUsage'];
        }

        if (isset($map['LastBillUtilization'])) {
            $model->lastBillUtilization = $map['LastBillUtilization'];
        }

        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }

        if (isset($map['PoolValue'])) {
            $model->poolValue = $map['PoolValue'];
        }

        if (isset($map['PrepayFee'])) {
            $model->prepayFee = $map['PrepayFee'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RestPoolValue'])) {
            $model->restPoolValue = $map['RestPoolValue'];
        }

        if (isset($map['SavingsType'])) {
            $model->savingsType = $map['SavingsType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalSave'])) {
            $model->totalSave = $map['TotalSave'];
        }

        if (isset($map['Utilization'])) {
            $model->utilization = $map['Utilization'];
        }

        return $model;
    }
}
