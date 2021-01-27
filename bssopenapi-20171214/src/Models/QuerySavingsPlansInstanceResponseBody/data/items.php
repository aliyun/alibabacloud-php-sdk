<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $share;

    /**
     * @var string
     */
    public $savingsType;

    /**
     * @var string
     */
    public $prepayFee;

    /**
     * @var string
     */
    public $utilization;

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
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $instanceFamily;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $totalSave;

    /**
     * @var string
     */
    public $poolValue;

    /**
     * @var string
     */
    public $payMode;
    protected $_name = [
        'status'         => 'Status',
        'share'          => 'Share',
        'savingsType'    => 'SavingsType',
        'prepayFee'      => 'PrepayFee',
        'utilization'    => 'Utilization',
        'instanceId'     => 'InstanceId',
        'currency'       => 'Currency',
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
        'instanceFamily' => 'InstanceFamily',
        'region'         => 'Region',
        'totalSave'      => 'TotalSave',
        'poolValue'      => 'PoolValue',
        'payMode'        => 'PayMode',
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
        if (null !== $this->share) {
            $res['Share'] = $this->share;
        }
        if (null !== $this->savingsType) {
            $res['SavingsType'] = $this->savingsType;
        }
        if (null !== $this->prepayFee) {
            $res['PrepayFee'] = $this->prepayFee;
        }
        if (null !== $this->utilization) {
            $res['Utilization'] = $this->utilization;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->instanceFamily) {
            $res['InstanceFamily'] = $this->instanceFamily;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->totalSave) {
            $res['TotalSave'] = $this->totalSave;
        }
        if (null !== $this->poolValue) {
            $res['PoolValue'] = $this->poolValue;
        }
        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
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
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }
        if (isset($map['SavingsType'])) {
            $model->savingsType = $map['SavingsType'];
        }
        if (isset($map['PrepayFee'])) {
            $model->prepayFee = $map['PrepayFee'];
        }
        if (isset($map['Utilization'])) {
            $model->utilization = $map['Utilization'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['InstanceFamily'])) {
            $model->instanceFamily = $map['InstanceFamily'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TotalSave'])) {
            $model->totalSave = $map['TotalSave'];
        }
        if (isset($map['PoolValue'])) {
            $model->poolValue = $map['PoolValue'];
        }
        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }

        return $model;
    }
}
