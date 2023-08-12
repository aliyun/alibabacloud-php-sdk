<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class CreateMyBaseShrinkRequest extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example 4ed77dd1-ff52-407e-ac58-dc251822****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example testDedicatedGroupName
     *
     * @var string
     */
    public $dedicatedHostGroupDescription;

    /**
     * @example dhg-6dx5n9gjs96u****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @example [{"sysDiskCapacity":40,"instanceType":"ecs.d2s.10xlarge","nodeCount":1,"sysDiskType":"cloud_essd"}]
     *
     * @var string
     */
    public $ECSClassListShrink;

    /**
     * @var string
     */
    public $ecsDeploymentSetId;

    /**
     * @var string
     */
    public $ecsHostName;

    /**
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var string
     */
    public $ecsUniqueSuffix;

    /**
     * @example alisql
     *
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @example Test123456
     *
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
    public $passwordInherit;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example 1
     *
     * @var string
     */
    public $period;

    /**
     * @example Monthly
     *
     * @var string
     */
    public $periodType;

    /**
     * @example ap-southeast-1
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
     * @example sg-t4neld965n89ocvt****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-t4ni3mzqqw98vt317****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-t4nbtmekgxotv0d3y****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'                     => 'AutoRenew',
        'clientToken'                   => 'ClientToken',
        'dedicatedHostGroupDescription' => 'DedicatedHostGroupDescription',
        'dedicatedHostGroupId'          => 'DedicatedHostGroupId',
        'ECSClassListShrink'            => 'ECSClassList',
        'ecsDeploymentSetId'            => 'EcsDeploymentSetId',
        'ecsHostName'                   => 'EcsHostName',
        'ecsInstanceName'               => 'EcsInstanceName',
        'ecsUniqueSuffix'               => 'EcsUniqueSuffix',
        'engine'                        => 'Engine',
        'imageId'                       => 'ImageId',
        'keyPairName'                   => 'KeyPairName',
        'osPassword'                    => 'OsPassword',
        'ownerId'                       => 'OwnerId',
        'passwordInherit'               => 'PasswordInherit',
        'payType'                       => 'PayType',
        'period'                        => 'Period',
        'periodType'                    => 'PeriodType',
        'regionId'                      => 'RegionId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'securityGroupId'               => 'SecurityGroupId',
        'vSwitchId'                     => 'VSwitchId',
        'vpcId'                         => 'VpcId',
        'zoneId'                        => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedicatedHostGroupDescription) {
            $res['DedicatedHostGroupDescription'] = $this->dedicatedHostGroupDescription;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->ECSClassListShrink) {
            $res['ECSClassList'] = $this->ECSClassListShrink;
        }
        if (null !== $this->ecsDeploymentSetId) {
            $res['EcsDeploymentSetId'] = $this->ecsDeploymentSetId;
        }
        if (null !== $this->ecsHostName) {
            $res['EcsHostName'] = $this->ecsHostName;
        }
        if (null !== $this->ecsInstanceName) {
            $res['EcsInstanceName'] = $this->ecsInstanceName;
        }
        if (null !== $this->ecsUniqueSuffix) {
            $res['EcsUniqueSuffix'] = $this->ecsUniqueSuffix;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->osPassword) {
            $res['OsPassword'] = $this->osPassword;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->passwordInherit) {
            $res['PasswordInherit'] = $this->passwordInherit;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMyBaseShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedicatedHostGroupDescription'])) {
            $model->dedicatedHostGroupDescription = $map['DedicatedHostGroupDescription'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['ECSClassList'])) {
            $model->ECSClassListShrink = $map['ECSClassList'];
        }
        if (isset($map['EcsDeploymentSetId'])) {
            $model->ecsDeploymentSetId = $map['EcsDeploymentSetId'];
        }
        if (isset($map['EcsHostName'])) {
            $model->ecsHostName = $map['EcsHostName'];
        }
        if (isset($map['EcsInstanceName'])) {
            $model->ecsInstanceName = $map['EcsInstanceName'];
        }
        if (isset($map['EcsUniqueSuffix'])) {
            $model->ecsUniqueSuffix = $map['EcsUniqueSuffix'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['OsPassword'])) {
            $model->osPassword = $map['OsPassword'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PasswordInherit'])) {
            $model->passwordInherit = $map['PasswordInherit'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
