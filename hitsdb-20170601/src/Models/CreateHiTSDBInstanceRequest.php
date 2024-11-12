<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models;

use AlibabaCloud\Tea\Model;

class CreateHiTSDBInstanceRequest extends Model
{
    /**
     * @description The ID of the zone in which you want to create the instance.
     *
     * @example None
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The ID of the request.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The disk type of TSDB for InfluxDB️®️.
     *
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD.
     *   cloud_essd: ESSD cloud_auto: ESSD AutoPL disk
     *
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description The type of the instance.
     *
     * @example tsdb_test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * This parameter is required.
     * @example tsdb.1x.basic
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PREPAY: subscription
     *   POSTPAY: pay-as-you-go
     *
     * This parameter is required.
     * @example 50
     *
     * @var string
     */
    public $instanceStorage;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the VPC in which the instances reside.
     *
     * This parameter is required.
     * @example PREPAY
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription duration of the instance.
     *
     *   If PricingCycle is set to Month, set this parameter to an integer that ranges from 1 to 9.
     *   If PricingCycle is set to Year, set this parameter to an integer that ranges from 1 to 3.
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description A reserved parameter.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
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
    public $securityToken;

    /**
     * @description The ID of the vSwitch to which the instance connects to.
     *
     * This parameter is required.
     * @example vpc-wz9ydz3vg93s1ozsd****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The unit of the subscription duration of the instance. Valid values:
     *
     *   Month
     *   Year
     *
     * This parameter is required.
     * @example vsw-wz9kv78f9cp47yadu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the instance .
     *
     * This parameter is required.
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appKey'               => 'AppKey',
        'diskCategory'         => 'DiskCategory',
        'duration'             => 'Duration',
        'instanceAlias'        => 'InstanceAlias',
        'instanceClass'        => 'InstanceClass',
        'instanceStorage'      => 'InstanceStorage',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'pricingCycle'         => 'PricingCycle',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'VPCId'                => 'VPCId',
        'vSwitchId'            => 'VSwitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
