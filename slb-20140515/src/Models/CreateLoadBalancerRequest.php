<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateLoadBalancerRequest extends Model
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
    public $regionId;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $masterZoneId;

    /**
     * @var string
     */
    public $slaveZoneId;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $deleteProtection;

    /**
     * @var string
     */
    public $modificationProtectionStatus;

    /**
     * @var string
     */
    public $modificationProtectionReason;
    protected $_name = [
        'ownerId'                      => 'OwnerId',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'regionId'                     => 'RegionId',
        'addressType'                  => 'AddressType',
        'internetChargeType'           => 'InternetChargeType',
        'bandwidth'                    => 'Bandwidth',
        'clientToken'                  => 'ClientToken',
        'loadBalancerName'             => 'LoadBalancerName',
        'vpcId'                        => 'VpcId',
        'vSwitchId'                    => 'VSwitchId',
        'ownerAccount'                 => 'OwnerAccount',
        'masterZoneId'                 => 'MasterZoneId',
        'slaveZoneId'                  => 'SlaveZoneId',
        'loadBalancerSpec'             => 'LoadBalancerSpec',
        'resourceGroupId'              => 'ResourceGroupId',
        'payType'                      => 'PayType',
        'pricingCycle'                 => 'PricingCycle',
        'duration'                     => 'Duration',
        'autoPay'                      => 'AutoPay',
        'addressIPVersion'             => 'AddressIPVersion',
        'address'                      => 'Address',
        'deleteProtection'             => 'DeleteProtection',
        'modificationProtectionStatus' => 'ModificationProtectionStatus',
        'modificationProtectionReason' => 'ModificationProtectionReason',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->deleteProtection) {
            $res['DeleteProtection'] = $this->deleteProtection;
        }
        if (null !== $this->modificationProtectionStatus) {
            $res['ModificationProtectionStatus'] = $this->modificationProtectionStatus;
        }
        if (null !== $this->modificationProtectionReason) {
            $res['ModificationProtectionReason'] = $this->modificationProtectionReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLoadBalancerRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['DeleteProtection'])) {
            $model->deleteProtection = $map['DeleteProtection'];
        }
        if (isset($map['ModificationProtectionStatus'])) {
            $model->modificationProtectionStatus = $map['ModificationProtectionStatus'];
        }
        if (isset($map['ModificationProtectionReason'])) {
            $model->modificationProtectionReason = $map['ModificationProtectionReason'];
        }

        return $model;
    }
}
