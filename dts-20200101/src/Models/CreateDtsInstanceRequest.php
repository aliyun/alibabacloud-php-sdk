<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateDtsInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoStart;

    /**
     * @var int
     */
    public $computeUnit;

    /**
     * @var int
     */
    public $databaseCount;

    /**
     * @var string
     */
    public $destinationEndpointEngineName;

    /**
     * @var string
     */
    public $destinationRegion;

    /**
     * @var int
     */
    public $du;

    /**
     * @var string
     */
    public $feeType;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceEndpointEngineName;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $syncArchitecture;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $usedTime;
    protected $_name = [
        'autoPay'                       => 'AutoPay',
        'autoStart'                     => 'AutoStart',
        'computeUnit'                   => 'ComputeUnit',
        'databaseCount'                 => 'DatabaseCount',
        'destinationEndpointEngineName' => 'DestinationEndpointEngineName',
        'destinationRegion'             => 'DestinationRegion',
        'du'                            => 'Du',
        'feeType'                       => 'FeeType',
        'instanceClass'                 => 'InstanceClass',
        'jobId'                         => 'JobId',
        'payType'                       => 'PayType',
        'period'                        => 'Period',
        'quantity'                      => 'Quantity',
        'regionId'                      => 'RegionId',
        'sourceEndpointEngineName'      => 'SourceEndpointEngineName',
        'sourceRegion'                  => 'SourceRegion',
        'syncArchitecture'              => 'SyncArchitecture',
        'type'                          => 'Type',
        'usedTime'                      => 'UsedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->computeUnit) {
            $res['ComputeUnit'] = $this->computeUnit;
        }
        if (null !== $this->databaseCount) {
            $res['DatabaseCount'] = $this->databaseCount;
        }
        if (null !== $this->destinationEndpointEngineName) {
            $res['DestinationEndpointEngineName'] = $this->destinationEndpointEngineName;
        }
        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }
        if (null !== $this->du) {
            $res['Du'] = $this->du;
        }
        if (null !== $this->feeType) {
            $res['FeeType'] = $this->feeType;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceEndpointEngineName) {
            $res['SourceEndpointEngineName'] = $this->sourceEndpointEngineName;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->syncArchitecture) {
            $res['SyncArchitecture'] = $this->syncArchitecture;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDtsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['ComputeUnit'])) {
            $model->computeUnit = $map['ComputeUnit'];
        }
        if (isset($map['DatabaseCount'])) {
            $model->databaseCount = $map['DatabaseCount'];
        }
        if (isset($map['DestinationEndpointEngineName'])) {
            $model->destinationEndpointEngineName = $map['DestinationEndpointEngineName'];
        }
        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }
        if (isset($map['Du'])) {
            $model->du = $map['Du'];
        }
        if (isset($map['FeeType'])) {
            $model->feeType = $map['FeeType'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceEndpointEngineName'])) {
            $model->sourceEndpointEngineName = $map['SourceEndpointEngineName'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SyncArchitecture'])) {
            $model->syncArchitecture = $map['SyncArchitecture'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        return $model;
    }
}
