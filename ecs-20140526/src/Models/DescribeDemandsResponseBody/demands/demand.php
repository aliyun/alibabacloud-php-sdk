<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsResponseBody\demands\demand\supplyInfos;
use AlibabaCloud\Tea\Model;

class demand extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $demandId;

    /**
     * @var string
     */
    public $demandDescription;

    /**
     * @var string
     */
    public $demandTime;

    /**
     * @var supplyInfos
     */
    public $supplyInfos;

    /**
     * @var string
     */
    public $demandName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $availableAmount;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $usedAmount;

    /**
     * @var int
     */
    public $totalAmount;

    /**
     * @var int
     */
    public $deliveringAmount;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $demandStatus;
    protected $_name = [
        'comment'            => 'Comment',
        'demandId'           => 'DemandId',
        'demandDescription'  => 'DemandDescription',
        'demandTime'         => 'DemandTime',
        'supplyInfos'        => 'SupplyInfos',
        'demandName'         => 'DemandName',
        'instanceType'       => 'InstanceType',
        'instanceChargeType' => 'InstanceChargeType',
        'period'             => 'Period',
        'endTime'            => 'EndTime',
        'availableAmount'    => 'AvailableAmount',
        'startTime'          => 'StartTime',
        'periodUnit'         => 'PeriodUnit',
        'zoneId'             => 'ZoneId',
        'usedAmount'         => 'UsedAmount',
        'totalAmount'        => 'TotalAmount',
        'deliveringAmount'   => 'DeliveringAmount',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'demandStatus'       => 'DemandStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }
        if (null !== $this->demandDescription) {
            $res['DemandDescription'] = $this->demandDescription;
        }
        if (null !== $this->demandTime) {
            $res['DemandTime'] = $this->demandTime;
        }
        if (null !== $this->supplyInfos) {
            $res['SupplyInfos'] = null !== $this->supplyInfos ? $this->supplyInfos->toMap() : null;
        }
        if (null !== $this->demandName) {
            $res['DemandName'] = $this->demandName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->deliveringAmount) {
            $res['DeliveringAmount'] = $this->deliveringAmount;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->demandStatus) {
            $res['DemandStatus'] = $this->demandStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }
        if (isset($map['DemandDescription'])) {
            $model->demandDescription = $map['DemandDescription'];
        }
        if (isset($map['DemandTime'])) {
            $model->demandTime = $map['DemandTime'];
        }
        if (isset($map['SupplyInfos'])) {
            $model->supplyInfos = supplyInfos::fromMap($map['SupplyInfos']);
        }
        if (isset($map['DemandName'])) {
            $model->demandName = $map['DemandName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['DeliveringAmount'])) {
            $model->deliveringAmount = $map['DeliveringAmount'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['DemandStatus'])) {
            $model->demandStatus = $map['DemandStatus'];
        }

        return $model;
    }
}
