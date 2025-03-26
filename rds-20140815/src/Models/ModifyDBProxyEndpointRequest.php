<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBProxyEndpointRequest extends Model
{
    /**
     * @var string
     */
    public $causalConsistReadTimeout;

    /**
     * @var string
     */
    public $configDBProxyFeatures;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @var string
     */
    public $dbEndpointAliases;

    /**
     * @var string
     */
    public $dbEndpointMinSlaveCount;

    /**
     * @var string
     */
    public $dbEndpointOperator;

    /**
     * @var string
     */
    public $dbEndpointReadWriteMode;

    /**
     * @var string
     */
    public $dbEndpointType;

    /**
     * @var string
     */
    public $effectiveSpecificTime;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @var string
     */
    public $readOnlyInstanceWeight;

    /**
     * @var string
     */
    public $regionId;

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
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'causalConsistReadTimeout' => 'CausalConsistReadTimeout',
        'configDBProxyFeatures' => 'ConfigDBProxyFeatures',
        'DBInstanceId' => 'DBInstanceId',
        'DBProxyEndpointId' => 'DBProxyEndpointId',
        'DBProxyEngineType' => 'DBProxyEngineType',
        'dbEndpointAliases' => 'DbEndpointAliases',
        'dbEndpointMinSlaveCount' => 'DbEndpointMinSlaveCount',
        'dbEndpointOperator' => 'DbEndpointOperator',
        'dbEndpointReadWriteMode' => 'DbEndpointReadWriteMode',
        'dbEndpointType' => 'DbEndpointType',
        'effectiveSpecificTime' => 'EffectiveSpecificTime',
        'effectiveTime' => 'EffectiveTime',
        'ownerId' => 'OwnerId',
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'readOnlyInstanceMaxDelayTime' => 'ReadOnlyInstanceMaxDelayTime',
        'readOnlyInstanceWeight' => 'ReadOnlyInstanceWeight',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->causalConsistReadTimeout) {
            $res['CausalConsistReadTimeout'] = $this->causalConsistReadTimeout;
        }

        if (null !== $this->configDBProxyFeatures) {
            $res['ConfigDBProxyFeatures'] = $this->configDBProxyFeatures;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }

        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }

        if (null !== $this->dbEndpointAliases) {
            $res['DbEndpointAliases'] = $this->dbEndpointAliases;
        }

        if (null !== $this->dbEndpointMinSlaveCount) {
            $res['DbEndpointMinSlaveCount'] = $this->dbEndpointMinSlaveCount;
        }

        if (null !== $this->dbEndpointOperator) {
            $res['DbEndpointOperator'] = $this->dbEndpointOperator;
        }

        if (null !== $this->dbEndpointReadWriteMode) {
            $res['DbEndpointReadWriteMode'] = $this->dbEndpointReadWriteMode;
        }

        if (null !== $this->dbEndpointType) {
            $res['DbEndpointType'] = $this->dbEndpointType;
        }

        if (null !== $this->effectiveSpecificTime) {
            $res['EffectiveSpecificTime'] = $this->effectiveSpecificTime;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->readOnlyInstanceDistributionType) {
            $res['ReadOnlyInstanceDistributionType'] = $this->readOnlyInstanceDistributionType;
        }

        if (null !== $this->readOnlyInstanceMaxDelayTime) {
            $res['ReadOnlyInstanceMaxDelayTime'] = $this->readOnlyInstanceMaxDelayTime;
        }

        if (null !== $this->readOnlyInstanceWeight) {
            $res['ReadOnlyInstanceWeight'] = $this->readOnlyInstanceWeight;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['CausalConsistReadTimeout'])) {
            $model->causalConsistReadTimeout = $map['CausalConsistReadTimeout'];
        }

        if (isset($map['ConfigDBProxyFeatures'])) {
            $model->configDBProxyFeatures = $map['ConfigDBProxyFeatures'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }

        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }

        if (isset($map['DbEndpointAliases'])) {
            $model->dbEndpointAliases = $map['DbEndpointAliases'];
        }

        if (isset($map['DbEndpointMinSlaveCount'])) {
            $model->dbEndpointMinSlaveCount = $map['DbEndpointMinSlaveCount'];
        }

        if (isset($map['DbEndpointOperator'])) {
            $model->dbEndpointOperator = $map['DbEndpointOperator'];
        }

        if (isset($map['DbEndpointReadWriteMode'])) {
            $model->dbEndpointReadWriteMode = $map['DbEndpointReadWriteMode'];
        }

        if (isset($map['DbEndpointType'])) {
            $model->dbEndpointType = $map['DbEndpointType'];
        }

        if (isset($map['EffectiveSpecificTime'])) {
            $model->effectiveSpecificTime = $map['EffectiveSpecificTime'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ReadOnlyInstanceDistributionType'])) {
            $model->readOnlyInstanceDistributionType = $map['ReadOnlyInstanceDistributionType'];
        }

        if (isset($map['ReadOnlyInstanceMaxDelayTime'])) {
            $model->readOnlyInstanceMaxDelayTime = $map['ReadOnlyInstanceMaxDelayTime'];
        }

        if (isset($map['ReadOnlyInstanceWeight'])) {
            $model->readOnlyInstanceWeight = $map['ReadOnlyInstanceWeight'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
