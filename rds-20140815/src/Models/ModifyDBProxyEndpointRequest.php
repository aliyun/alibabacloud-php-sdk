<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyEndpointRequest extends Model
{
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
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBProxyEndpointId;

    /**
     * @var string
     */
    public $configDBProxyFeatures;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $readOnlyInstanceMaxDelayTime;

    /**
     * @var string
     */
    public $readOnlyInstanceDistributionType;

    /**
     * @var string
     */
    public $readOnlyInstanceWeight;

    /**
     * @var string
     */
    public $dbEndpointOperator;

    /**
     * @var string
     */
    public $dbEndpointAliases;

    /**
     * @var string
     */
    public $dbEndpointType;

    /**
     * @var string
     */
    public $dbEndpointReadWriteMode;
    protected $_name = [
        'ownerId'                          => 'OwnerId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'DBInstanceId'                     => 'DBInstanceId',
        'DBProxyEndpointId'                => 'DBProxyEndpointId',
        'configDBProxyFeatures'            => 'ConfigDBProxyFeatures',
        'regionId'                         => 'RegionId',
        'readOnlyInstanceMaxDelayTime'     => 'ReadOnlyInstanceMaxDelayTime',
        'readOnlyInstanceDistributionType' => 'ReadOnlyInstanceDistributionType',
        'readOnlyInstanceWeight'           => 'ReadOnlyInstanceWeight',
        'dbEndpointOperator'               => 'DbEndpointOperator',
        'dbEndpointAliases'                => 'DbEndpointAliases',
        'dbEndpointType'                   => 'DbEndpointType',
        'dbEndpointReadWriteMode'          => 'DbEndpointReadWriteMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyEndpointId) {
            $res['DBProxyEndpointId'] = $this->DBProxyEndpointId;
        }
        if (null !== $this->configDBProxyFeatures) {
            $res['ConfigDBProxyFeatures'] = $this->configDBProxyFeatures;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->readOnlyInstanceMaxDelayTime) {
            $res['ReadOnlyInstanceMaxDelayTime'] = $this->readOnlyInstanceMaxDelayTime;
        }
        if (null !== $this->readOnlyInstanceDistributionType) {
            $res['ReadOnlyInstanceDistributionType'] = $this->readOnlyInstanceDistributionType;
        }
        if (null !== $this->readOnlyInstanceWeight) {
            $res['ReadOnlyInstanceWeight'] = $this->readOnlyInstanceWeight;
        }
        if (null !== $this->dbEndpointOperator) {
            $res['DbEndpointOperator'] = $this->dbEndpointOperator;
        }
        if (null !== $this->dbEndpointAliases) {
            $res['DbEndpointAliases'] = $this->dbEndpointAliases;
        }
        if (null !== $this->dbEndpointType) {
            $res['DbEndpointType'] = $this->dbEndpointType;
        }
        if (null !== $this->dbEndpointReadWriteMode) {
            $res['DbEndpointReadWriteMode'] = $this->dbEndpointReadWriteMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBProxyEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyEndpointId'])) {
            $model->DBProxyEndpointId = $map['DBProxyEndpointId'];
        }
        if (isset($map['ConfigDBProxyFeatures'])) {
            $model->configDBProxyFeatures = $map['ConfigDBProxyFeatures'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReadOnlyInstanceMaxDelayTime'])) {
            $model->readOnlyInstanceMaxDelayTime = $map['ReadOnlyInstanceMaxDelayTime'];
        }
        if (isset($map['ReadOnlyInstanceDistributionType'])) {
            $model->readOnlyInstanceDistributionType = $map['ReadOnlyInstanceDistributionType'];
        }
        if (isset($map['ReadOnlyInstanceWeight'])) {
            $model->readOnlyInstanceWeight = $map['ReadOnlyInstanceWeight'];
        }
        if (isset($map['DbEndpointOperator'])) {
            $model->dbEndpointOperator = $map['DbEndpointOperator'];
        }
        if (isset($map['DbEndpointAliases'])) {
            $model->dbEndpointAliases = $map['DbEndpointAliases'];
        }
        if (isset($map['DbEndpointType'])) {
            $model->dbEndpointType = $map['DbEndpointType'];
        }
        if (isset($map['DbEndpointReadWriteMode'])) {
            $model->dbEndpointReadWriteMode = $map['DbEndpointReadWriteMode'];
        }

        return $model;
    }
}
