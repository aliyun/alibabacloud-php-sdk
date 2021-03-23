<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody\data;

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
    public $savingsType;

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
    public $poolValue;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $status;

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
    public $payMode;

    /**
     * @var string
     */
    public $prepayFee;

    /**
     * @var string
     */
    public $totalSave;

    /**
     * @var string
     */
    public $utilization;

    /**
     * @var bool
     */
    public $share;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'savingsType'    => 'SavingsType',
        'instanceFamily' => 'InstanceFamily',
        'region'         => 'Region',
        'poolValue'      => 'PoolValue',
        'currency'       => 'Currency',
        'status'         => 'Status',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'payMode'        => 'PayMode',
        'prepayFee'      => 'PrepayFee',
        'totalSave'      => 'TotalSave',
        'utilization'    => 'Utilization',
        'share'          => 'Share',
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
        if (null !== $this->savingsType) {
            $res['SavingsType'] = $this->savingsType;
        }
        if (null !== $this->instanceFamily) {
            $res['InstanceFamily'] = $this->instanceFamily;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->poolValue) {
            $res['PoolValue'] = $this->poolValue;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
        }
        if (null !== $this->prepayFee) {
            $res['PrepayFee'] = $this->prepayFee;
        }
        if (null !== $this->totalSave) {
            $res['TotalSave'] = $this->totalSave;
        }
        if (null !== $this->utilization) {
            $res['Utilization'] = $this->utilization;
        }
        if (null !== $this->share) {
            $res['Share'] = $this->share;
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
        if (isset($map['SavingsType'])) {
            $model->savingsType = $map['SavingsType'];
        }
        if (isset($map['InstanceFamily'])) {
            $model->instanceFamily = $map['InstanceFamily'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['PoolValue'])) {
            $model->poolValue = $map['PoolValue'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }
        if (isset($map['PrepayFee'])) {
            $model->prepayFee = $map['PrepayFee'];
        }
        if (isset($map['TotalSave'])) {
            $model->totalSave = $map['TotalSave'];
        }
        if (isset($map['Utilization'])) {
            $model->utilization = $map['Utilization'];
        }
        if (isset($map['Share'])) {
            $model->share = $map['Share'];
        }

        return $model;
    }
}
