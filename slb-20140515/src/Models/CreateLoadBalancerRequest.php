<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\CreateLoadBalancerRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateLoadBalancerRequest extends Model
{
    /**
     * @description The private IP address of the CLB instance. The private IP address must belong to the destination CIDR block of the vSwitch.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The IP version that is used by the CLB instance. Valid values: **ipv4** and **ipv6**.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The network type of the CLB instance. Valid values:
     *
     *   **internet**: After an Internet-facing CLB instance is created, the system assigns a public IP address to the CLB instance. Then, the CLB instance can forward requests over the Internet.
     *   **intranet**: After an internal-facing CLB instance is created, the system assigns a private IP address to the CLB instance. Then, the CLB instance can forward requests only over the internal networks.
     *
     * @example internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description Specifies whether to automatically pay for the subscription Internet-facing CLB instance. Valid values:
     *
     *   **true**: automatically pays for the CLB instance. After you call this operation, the system automatically completes the payment and creates the CLB instance.
     *   **false** (default): After you call the operation, the order is created but the payment is not completed. You can view the pending order in the console. The CLB instance will not be created until you complete the payment.
     *
     * >  This parameter is supported only by subscription instances created on the Alibaba Cloud China site.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s.
     *
     * Valid values: **1** to **5120**. For a pay-by-bandwidth Internet-facing CLB instance, you can specify the maximum bandwidth of each listener. The sum of the maximum bandwidth of all listeners cannot exceed the maximum bandwidth of the CLB instance.
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * >  If you do not specify this parameter, the system uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable deletion protection for the CLB instance. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $deleteProtection;

    /**
     * @description The subscription duration of the Internet-facing CLB instance. Valid values:
     *
     *   If **PricingCycle** is set to **month**, the valid values are **1 to 9**.
     *   If **PricingCycle** is set to **year**, the valid values are **1 to 5**.
     *
     * >  This parameter is supported only by subscription instances created on the Alibaba Cloud China site.
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The metering method of the CLB instance. Valid values:
     *
     *   **PayBySpec** (default)
     *   **PayByCLCU**
     *
     * >  This parameter is supported only by instances created on the Alibaba Cloud China site and only when **PayType** is set to **PayOnDemand**.
     * @example PayBySpec
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Internet-facing CLB instance. Valid values:
     *
     *   **paybytraffic** (default)
     *
     * > If you set the value to **paybytraffic**, you do not need to specify **Bandwidth**. Even if you specify **Bandwidth**, the value does not take effect.
     *
     *   **paybybandwidth**: pay-by-bandwidth
     *
     * >  If you set **PayType** to **PayOnDemand** and set **InstanceChargeType** to **PayByCLCU**, you must set InternetChargeType to **paybytraffic**.
     * @example paybytraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The CLB instance name.
     *
     * If you do not specify this parameter, the system automatically assigns a name to the CLB instance.
     * @example lb-bp1o94dp5i6ea****
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The specification of the CLB instance. Valid values:
     *
     *   **slb.s1.small**
     *
     *   **slb.s2.small**
     *
     *   **slb.s2.medium**
     *
     *   **slb.s3.small**
     *
     *   **slb.s3.medium**
     *
     *   **slb.s3.large**
     *
     **
     *
     **Note** If you do not specify this parameter, a shared-resource CLB instance is created. Shared-resource CLB instances are no longer available for purchase. Therefore, you must specify this parameter.
     *
     * If **InstanceChargeType** is set to **PayByCLCU**, this parameter is invalid and you do not need to specify this parameter.
     * @example slb.s1.small
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @description The ID of the primary zone to which the CLB instance belongs.
     *
     * You can call the [DescribeZone](~~DescribeZone~~) operation to query the primary and secondary zones in the region where you want to create the CLB instance.
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $masterZoneId;

    /**
     * @description The reason for enabling the configuration read-only mode. The reason must be 1 to 80 characters in length. It must start with a letter and can contain letters, digits, periods (.), underscores (_), and hyphens (-).
     *
     * >  This parameter takes effect only when **ModificationProtectionStatus** is set to **ConsoleProtection**.
     * @example Managed instance
     *
     * @var string
     */
    public $modificationProtectionReason;

    /**
     * @description Specifies whether to enable the configuration read-only mode. Valid values:
     *
     *   **NonProtection**: disables the configuration read-only mode. After you disable the configuration read-only mode, the value of **ModificationProtectionReason** is cleared.
     *   **ConsoleProtection**: enables the configuration read-only mode.
     *
     * >  If you set this parameter to **ConsoleProtection**, you cannot modify instance configurations in the CLB console. However, you can modify instance configurations by calling API operations.
     * @example ConsoleProtection
     *
     * @var string
     */
    public $modificationProtectionStatus;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the CLB instance. Set the value to
     *
     **PayOnDemand**, which specifies the pay-as-you-go billing method.
     *
     * @example PayOnDemand
     *
     * @var string
     */
    public $payType;

    /**
     * @description The billing cycle of the subscription Internet-facing CLB instance. Valid values:
     *
     *   **month**
     *   **year**
     *
     * >  This parameter is supported only by subscription instances created on the Alibaba Cloud China site.
     * @example month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The region ID of the CLB instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3rtopt****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the secondary zone to which the CLB instance belongs.
     *
     * You can call the [DescribeZone](~~DescribeZone~~) operation to query the primary and secondary zones in the region where you want to create the CLB instance.
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $slaveZoneId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch to which the CLB instance belongs.
     *
     * If you want to deploy the CLB instance in a VPC, this parameter is required. If this parameter is specified, **AddessType** is set to **intranet** by default.
     * @example vsw-bp12mw1f8k3jgy****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the CLB instance belongs.
     *
     * @example vpc-bp1aevy8sofi8mh1****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'address'                      => 'Address',
        'addressIPVersion'             => 'AddressIPVersion',
        'addressType'                  => 'AddressType',
        'autoPay'                      => 'AutoPay',
        'bandwidth'                    => 'Bandwidth',
        'clientToken'                  => 'ClientToken',
        'deleteProtection'             => 'DeleteProtection',
        'duration'                     => 'Duration',
        'instanceChargeType'           => 'InstanceChargeType',
        'internetChargeType'           => 'InternetChargeType',
        'loadBalancerName'             => 'LoadBalancerName',
        'loadBalancerSpec'             => 'LoadBalancerSpec',
        'masterZoneId'                 => 'MasterZoneId',
        'modificationProtectionReason' => 'ModificationProtectionReason',
        'modificationProtectionStatus' => 'ModificationProtectionStatus',
        'ownerAccount'                 => 'OwnerAccount',
        'ownerId'                      => 'OwnerId',
        'payType'                      => 'PayType',
        'pricingCycle'                 => 'PricingCycle',
        'regionId'                     => 'RegionId',
        'resourceGroupId'              => 'ResourceGroupId',
        'resourceOwnerAccount'         => 'ResourceOwnerAccount',
        'resourceOwnerId'              => 'ResourceOwnerId',
        'slaveZoneId'                  => 'SlaveZoneId',
        'tag'                          => 'Tag',
        'vSwitchId'                    => 'VSwitchId',
        'vpcId'                        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deleteProtection) {
            $res['DeleteProtection'] = $this->deleteProtection;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->modificationProtectionReason) {
            $res['ModificationProtectionReason'] = $this->modificationProtectionReason;
        }
        if (null !== $this->modificationProtectionStatus) {
            $res['ModificationProtectionStatus'] = $this->modificationProtectionStatus;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeleteProtection'])) {
            $model->deleteProtection = $map['DeleteProtection'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['ModificationProtectionReason'])) {
            $model->modificationProtectionReason = $map['ModificationProtectionReason'];
        }
        if (isset($map['ModificationProtectionStatus'])) {
            $model->modificationProtectionStatus = $map['ModificationProtectionStatus'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
