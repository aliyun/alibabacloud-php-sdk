<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateElasticityAssuranceRequest\privatePoolOptions;
use AlibabaCloud\Tea\Model;

class CreateElasticityAssuranceRequest extends Model
{
    /**
     * @var privatePoolOptions
     */
    public $privatePoolOptions;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $assuranceTimes;

    /**
     * @var int
     */
    public $instanceAmount;

    /**
     * @var int
     */
    public $instanceCpuCoreCount;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $zoneId;

    /**
     * @var string[]
     */
    public $instanceType;
    protected $_name = [
        'privatePoolOptions'   => 'PrivatePoolOptions',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'clientToken'          => 'ClientToken',
        'description'          => 'Description',
        'assuranceTimes'       => 'AssuranceTimes',
        'instanceAmount'       => 'InstanceAmount',
        'instanceCpuCoreCount' => 'InstanceCpuCoreCount',
        'startTime'            => 'StartTime',
        'zoneId'               => 'ZoneId',
        'instanceType'         => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = null !== $this->privatePoolOptions ? $this->privatePoolOptions->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->assuranceTimes) {
            $res['AssuranceTimes'] = $this->assuranceTimes;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceCpuCoreCount) {
            $res['InstanceCpuCoreCount'] = $this->instanceCpuCoreCount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateElasticityAssuranceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivatePoolOptions'])) {
            $model->privatePoolOptions = privatePoolOptions::fromMap($map['PrivatePoolOptions']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AssuranceTimes'])) {
            $model->assuranceTimes = $map['AssuranceTimes'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceCpuCoreCount'])) {
            $model->instanceCpuCoreCount = $map['InstanceCpuCoreCount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ZoneId'])) {
            if (!empty($map['ZoneId'])) {
                $model->zoneId = $map['ZoneId'];
            }
        }
        if (isset($map['InstanceType'])) {
            if (!empty($map['InstanceType'])) {
                $model->instanceType = $map['InstanceType'];
            }
        }

        return $model;
    }
}
