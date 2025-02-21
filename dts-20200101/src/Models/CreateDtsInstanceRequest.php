<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $dtsRegion;
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
     * @var float
     */
    public $maxDu;
    /**
     * @var float
     */
    public $minDu;
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
    public $resourceGroupId;
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
        'dtsRegion'                     => 'DtsRegion',
        'du'                            => 'Du',
        'feeType'                       => 'FeeType',
        'instanceClass'                 => 'InstanceClass',
        'jobId'                         => 'JobId',
        'maxDu'                         => 'MaxDu',
        'minDu'                         => 'MinDu',
        'payType'                       => 'PayType',
        'period'                        => 'Period',
        'quantity'                      => 'Quantity',
        'regionId'                      => 'RegionId',
        'resourceGroupId'               => 'ResourceGroupId',
        'sourceEndpointEngineName'      => 'SourceEndpointEngineName',
        'sourceRegion'                  => 'SourceRegion',
        'syncArchitecture'              => 'SyncArchitecture',
        'type'                          => 'Type',
        'usedTime'                      => 'UsedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->dtsRegion) {
            $res['DtsRegion'] = $this->dtsRegion;
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

        if (null !== $this->maxDu) {
            $res['MaxDu'] = $this->maxDu;
        }

        if (null !== $this->minDu) {
            $res['MinDu'] = $this->minDu;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DtsRegion'])) {
            $model->dtsRegion = $map['DtsRegion'];
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

        if (isset($map['MaxDu'])) {
            $model->maxDu = $map['MaxDu'];
        }

        if (isset($map['MinDu'])) {
            $model->minDu = $map['MinDu'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
