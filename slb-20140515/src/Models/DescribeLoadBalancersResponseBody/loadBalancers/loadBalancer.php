<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersResponseBody\loadBalancers;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersResponseBody\loadBalancers\loadBalancer\tags;
use AlibabaCloud\Tea\Model;

class loadBalancer extends Model
{
    /**
     * @description The endpoint of the CLB instance.
     *
     * @example 100.XX.XX.28
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
     *   **internet:** After an Internet-facing CLB instance is created, the system assigns a public IP address to the CLB instance. Then, the CLB instance can forward requests over the Internet.
     *   **intranet:** After an internal-facing CLB instance is created, the system assigns a private IP address to the CLB instance. Then, the CLB instance can forward requests only over internal networks.
     *
     * @example intranet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s. Valid values:
     *
     *   **-1:** For a pay-by-data-transfer Internet-facing CLB instance, this value is set to -1. This indicates that the bandwidth is unlimited.
     *   **1 to 5120:** For a pay-by-bandwidth Internet-facing CLB instance, you can specify the maximum bandwidth for each listener. The sum of the maximum bandwidth of all listeners cannot exceed the maximum bandwidth of the CLB instance.
     *
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The time when the CLB instance was created. The time follows the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2021-12-02T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp when the instance was created.
     *
     * @example 1504147745000
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description Indicates whether deletion protection is enabled for the CLB instance. Valid values:
     *
     *   **on:** Deletion protection is enabled.
     *   **off:** Deletion protection is disabled.
     *
     * @example off
     *
     * @var string
     */
    public $deleteProtection;

    /**
     * @description The metering method of the CLB instance. Valid values:
     *
     *   **PayBySpec:** pay-by-specification.
     *   **PayByCLCU:** pay-by-LCU.
     *
     * >  This parameter takes effect only for accounts registered on the China site (aliyun.com) and when the **PayType** parameter is set to **PayOnDemand**.
     * @example PayBySpec
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Internet-facing CLB instance. Valid values:
     *
     *   **3:** pay-by-bandwidth (**paybybandwidth**).
     *   **4:** pay-by-data-transfer (**paybytraffic**).
     *
     * @example 3
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The metering method of Internet data transfer. Valid values:
     *
     *   **paybybandwidth:** pay-by-bandwidth.
     *   **paybytraffic:** pay-by-data-transfer.
     *
     * @example paybybandwidth
     *
     * @var string
     */
    public $internetChargeTypeAlias;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1b6c719dfa****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the CLB instance.
     *
     * @example lb-bp1o94dp5i6ea****
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @description The specification of the CLB instance.
     *
     * @example slb.s1.small
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @description The status of the CLB instance. Valid values:
     *
     *   **inactive:** The CLB instance is disabled. CLB instances in the inactive state do not forward traffic.
     *   **active:** The CLB instance runs as expected. By default, newly created CLB instances are in the **active** state.
     *   **locked:** The CLB instance is locked.
     *
     * @example active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description The ID of the primary zone to which the CLB instance belongs.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $masterZoneId;

    /**
     * @description The reason why the configuration read-only mode was enabled. The reason must be 1 to 80 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The reason must start with a letter.
     *
     * > This parameter takes effect only when you set the `ModificationProtectionStatus` parameter to **ConsoleProtection**.
     * @example ManagedInstance
     *
     * @var string
     */
    public $modificationProtectionReason;

    /**
     * @description Indicates whether the configuration read-only mode is enabled for the CLB instance. Valid values:
     *
     *   **NonProtection:** The configuration read-only mode is disabled. In this case, you cannot specify the ModificationProtectionReason parameter. If you specify the `ModificationProtectionReason` parameter, the value is cleared.
     *   **ConsoleProtection:** The configuration read-only mode is enabled.
     *
     * >  If you set this parameter to **ConsoleProtection**, you cannot modify the configurations of the CLB instance in the CLB console. However, you can call API operations to modify the configurations of the CLB instance.
     * @example ConsoleProtection
     *
     * @var string
     */
    public $modificationProtectionStatus;

    /**
     * @description The network type of the internal-facing CLB instance. Valid values:
     *
     *   **vpc:** VPC.
     *   **classic:** classic network.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The billing method of the CLB instance.
     *
     *   **PayOnDemand** is returned, which indicates the pay-as-you-go billing method.
     *
     * @example PayOnDemand
     *
     * @var string
     */
    public $payType;

    /**
     * @description The ID of the region where the CLB instance was deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The region where the CLB instance was deployed.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $regionIdAlias;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-atstuj3r****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the secondary zone to which the CLB instance belongs.
     *
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $slaveZoneId;

    /**
     * @description The tags of the CLB instance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the vSwitch to which the internal-facing CLB instance belongs.
     *
     * @example vsw-255ecr****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC in which the internal-facing CLB instance was deployed.
     *
     * @example vpc-25dvzy9f8****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'address'                      => 'Address',
        'addressIPVersion'             => 'AddressIPVersion',
        'addressType'                  => 'AddressType',
        'bandwidth'                    => 'Bandwidth',
        'createTime'                   => 'CreateTime',
        'createTimeStamp'              => 'CreateTimeStamp',
        'deleteProtection'             => 'DeleteProtection',
        'instanceChargeType'           => 'InstanceChargeType',
        'internetChargeType'           => 'InternetChargeType',
        'internetChargeTypeAlias'      => 'InternetChargeTypeAlias',
        'loadBalancerId'               => 'LoadBalancerId',
        'loadBalancerName'             => 'LoadBalancerName',
        'loadBalancerSpec'             => 'LoadBalancerSpec',
        'loadBalancerStatus'           => 'LoadBalancerStatus',
        'masterZoneId'                 => 'MasterZoneId',
        'modificationProtectionReason' => 'ModificationProtectionReason',
        'modificationProtectionStatus' => 'ModificationProtectionStatus',
        'networkType'                  => 'NetworkType',
        'payType'                      => 'PayType',
        'regionId'                     => 'RegionId',
        'regionIdAlias'                => 'RegionIdAlias',
        'resourceGroupId'              => 'ResourceGroupId',
        'slaveZoneId'                  => 'SlaveZoneId',
        'tags'                         => 'Tags',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
        }
        if (null !== $this->deleteProtection) {
            $res['DeleteProtection'] = $this->deleteProtection;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetChargeTypeAlias) {
            $res['InternetChargeTypeAlias'] = $this->internetChargeTypeAlias;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionIdAlias) {
            $res['RegionIdAlias'] = $this->regionIdAlias;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
     * @return loadBalancer
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }
        if (isset($map['DeleteProtection'])) {
            $model->deleteProtection = $map['DeleteProtection'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetChargeTypeAlias'])) {
            $model->internetChargeTypeAlias = $map['InternetChargeTypeAlias'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionIdAlias'])) {
            $model->regionIdAlias = $map['RegionIdAlias'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
