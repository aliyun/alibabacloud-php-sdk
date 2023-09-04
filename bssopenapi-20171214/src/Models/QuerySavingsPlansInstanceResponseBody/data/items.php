<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody\data\items\tags;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The allocation status. Valid values:
     *
     *   unallocated
     *   allocated
     *   beAllocated
     *
     * @example unallocated
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @description The status of the instance. Valid values:
     *
     *   NORMAL: normal
     *   LIMIT: stopped due to overdue payment
     *   RELEASE: released
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $currentPoolValue;

    /**
     * @example 1:Year
     *
     * @var string
     */
    public $cycle;

    /**
     * @example HOUR
     *
     * @var string
     */
    public $deductCycleType;

    /**
     * @description The ID of the savings plan instance.
     *
     * @example 2021-01-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1663135741039
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description The value of the tag.
     *
     * @example ecs.g6
     *
     * @var string
     */
    public $instanceFamily;

    /**
     * @description The time when the instance takes effect. The time is in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example spn-xxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 100.0
     *
     * @var string
     */
    public $lastBillTotalUsage;

    /**
     * @example 0.8
     *
     * @var string
     */
    public $lastBillUtilization;

    /**
     * @example total
     *
     * @var string
     */
    public $payMode;

    /**
     * @description The total amount that is saved.
     *
     * @example 1.00
     *
     * @var string
     */
    public $poolValue;

    /**
     * @description The page number of the returned page.
     *
     * @example 8760.00
     *
     * @var string
     */
    public $prepayFee;

    /**
     * @description The total number of entries.
     *
     * @example cn-zhangjiakou-na62-a01
     *
     * @var string
     */
    public $region;

    /**
     * @example 100.0
     *
     * @var string
     */
    public $restPoolValue;

    /**
     * @description The key of the tag.
     *
     * @example ECS
     *
     * @var string
     */
    public $savingsType;

    /**
     * @description The payment type. Valid values:
     *
     *   total: All Upfront
     *   half: Partial Upfront
     *   zero: No Upfront
     *
     * @example 2020-01-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 1663135741039
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @description The value of the tag to query.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the request.
     *
     * @example 20.00
     *
     * @var string
     */
    public $totalSave;

    /**
     * @description The currency. Valid values: CNY and USD.
     *
     * @example 1.0
     *
     * @var string
     */
    public $utilization;
    protected $_name = [
        'allocationStatus'    => 'AllocationStatus',
        'commodityCode'       => 'CommodityCode',
        'currency'            => 'Currency',
        'currentPoolValue'    => 'CurrentPoolValue',
        'cycle'               => 'Cycle',
        'deductCycleType'     => 'DeductCycleType',
        'endTime'             => 'EndTime',
        'endTimestamp'        => 'EndTimestamp',
        'instanceFamily'      => 'InstanceFamily',
        'instanceId'          => 'InstanceId',
        'lastBillTotalUsage'  => 'LastBillTotalUsage',
        'lastBillUtilization' => 'LastBillUtilization',
        'payMode'             => 'PayMode',
        'poolValue'           => 'PoolValue',
        'prepayFee'           => 'PrepayFee',
        'region'              => 'Region',
        'restPoolValue'       => 'RestPoolValue',
        'savingsType'         => 'SavingsType',
        'startTime'           => 'StartTime',
        'startTimestamp'      => 'StartTimestamp',
        'status'              => 'Status',
        'tags'                => 'Tags',
        'totalSave'           => 'TotalSave',
        'utilization'         => 'Utilization',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return items
     */
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
