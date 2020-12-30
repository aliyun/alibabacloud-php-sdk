<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models;

use AlibabaCloud\Tea\Model;

class CreateHiTSDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

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
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceStorage;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $maxTimelineLimit;

    /**
     * @var string
     */
    public $instanceTps;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $maxSeriesPerDatabase;

    /**
     * @var string
     */
    public $maxDatabaseLimit;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $TSDBVersion;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'securityToken'        => 'SecurityToken',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'appKey'               => 'AppKey',
        'zoneId'               => 'ZoneId',
        'instanceName'         => 'InstanceName',
        'instanceAlias'        => 'InstanceAlias',
        'instanceClass'        => 'InstanceClass',
        'instanceStorage'      => 'InstanceStorage',
        'payType'              => 'PayType',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'maxTimelineLimit'     => 'MaxTimelineLimit',
        'instanceTps'          => 'InstanceTps',
        'engineType'           => 'EngineType',
        'maxSeriesPerDatabase' => 'MaxSeriesPerDatabase',
        'maxDatabaseLimit'     => 'MaxDatabaseLimit',
        'pricingCycle'         => 'PricingCycle',
        'duration'             => 'Duration',
        'TSDBVersion'          => 'TSDBVersion',
        'diskCategory'         => 'DiskCategory',
        'clientToken'          => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->maxTimelineLimit) {
            $res['MaxTimelineLimit'] = $this->maxTimelineLimit;
        }
        if (null !== $this->instanceTps) {
            $res['InstanceTps'] = $this->instanceTps;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->maxSeriesPerDatabase) {
            $res['MaxSeriesPerDatabase'] = $this->maxSeriesPerDatabase;
        }
        if (null !== $this->maxDatabaseLimit) {
            $res['MaxDatabaseLimit'] = $this->maxDatabaseLimit;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->TSDBVersion) {
            $res['TSDBVersion'] = $this->TSDBVersion;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHiTSDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['MaxTimelineLimit'])) {
            $model->maxTimelineLimit = $map['MaxTimelineLimit'];
        }
        if (isset($map['InstanceTps'])) {
            $model->instanceTps = $map['InstanceTps'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['MaxSeriesPerDatabase'])) {
            $model->maxSeriesPerDatabase = $map['MaxSeriesPerDatabase'];
        }
        if (isset($map['MaxDatabaseLimit'])) {
            $model->maxDatabaseLimit = $map['MaxDatabaseLimit'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['TSDBVersion'])) {
            $model->TSDBVersion = $map['TSDBVersion'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
