<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;

class CreateDedicatedHostShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterAlias;

    /**
     * @var string
     */
    public $clusterServicesShrink;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @var string
     */
    public $hostClass;

    /**
     * @var string
     */
    public $hostStorage;

    /**
     * @var string
     */
    public $hostStorageType;

    /**
     * @var string
     */
    public $imageCategory;

    /**
     * @var string
     */
    public $myBaseEcsClassShrink;

    /**
     * @var string
     */
    public $osPassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $period;

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
    public $usedTime;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcID;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'clientToken' => 'ClientToken',
        'clusterAlias' => 'ClusterAlias',
        'clusterServicesShrink' => 'ClusterServices',
        'clusterType' => 'ClusterType',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'hostClass' => 'HostClass',
        'hostStorage' => 'HostStorage',
        'hostStorageType' => 'HostStorageType',
        'imageCategory' => 'ImageCategory',
        'myBaseEcsClassShrink' => 'MyBaseEcsClass',
        'osPassword' => 'OsPassword',
        'ownerId' => 'OwnerId',
        'payType' => 'PayType',
        'period' => 'Period',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'usedTime' => 'UsedTime',
        'vSwitchId' => 'VSwitchId',
        'vpcID' => 'VpcID',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->clusterAlias) {
            $res['ClusterAlias'] = $this->clusterAlias;
        }

        if (null !== $this->clusterServicesShrink) {
            $res['ClusterServices'] = $this->clusterServicesShrink;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }

        if (null !== $this->hostClass) {
            $res['HostClass'] = $this->hostClass;
        }

        if (null !== $this->hostStorage) {
            $res['HostStorage'] = $this->hostStorage;
        }

        if (null !== $this->hostStorageType) {
            $res['HostStorageType'] = $this->hostStorageType;
        }

        if (null !== $this->imageCategory) {
            $res['ImageCategory'] = $this->imageCategory;
        }

        if (null !== $this->myBaseEcsClassShrink) {
            $res['MyBaseEcsClass'] = $this->myBaseEcsClassShrink;
        }

        if (null !== $this->osPassword) {
            $res['OsPassword'] = $this->osPassword;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
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

        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcID) {
            $res['VpcID'] = $this->vpcID;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ClusterAlias'])) {
            $model->clusterAlias = $map['ClusterAlias'];
        }

        if (isset($map['ClusterServices'])) {
            $model->clusterServicesShrink = $map['ClusterServices'];
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }

        if (isset($map['HostClass'])) {
            $model->hostClass = $map['HostClass'];
        }

        if (isset($map['HostStorage'])) {
            $model->hostStorage = $map['HostStorage'];
        }

        if (isset($map['HostStorageType'])) {
            $model->hostStorageType = $map['HostStorageType'];
        }

        if (isset($map['ImageCategory'])) {
            $model->imageCategory = $map['ImageCategory'];
        }

        if (isset($map['MyBaseEcsClass'])) {
            $model->myBaseEcsClassShrink = $map['MyBaseEcsClass'];
        }

        if (isset($map['OsPassword'])) {
            $model->osPassword = $map['OsPassword'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
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

        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcID'])) {
            $model->vpcID = $map['VpcID'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
