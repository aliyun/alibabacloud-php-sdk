<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\backendServers;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPorts;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocal;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @description The service IP address of the CLB instance.
     *
     * @example 42.XX.XX.6
     *
     * @var string
     */
    public $address;

    /**
     * @description The version of the IP address. Valid values: **ipv4** and **ipv6**.
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The address type of the CLB instance.
     *
     * @example internet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The timestamp generated when the CLB instance is released.
     *
     * @example 1513947075000
     *
     * @var int
     */
    public $autoReleaseTime;

    /**
     * @description The backend servers of the CLB instance.
     *
     * @var backendServers
     */
    public $backendServers;

    /**
     * @description The maximum bandwidth of the Internet-facing CLB instance that is billed on a pay-by-bandwidth basis.
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The time when the CLB instance was created. The time is in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2017-08-31T02:49:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp generated when the CA certificate is uploaded.
     *
     * @example 1504147745000
     *
     * @var int
     */
    public $createTimeStamp;

    /**
     * @description Indicates whether deletion protection is enabled for the CLB instance.
     *
     * Valid values: **on** and **off**.
     * @example off
     *
     * @var string
     */
    public $deleteProtection;

    /**
     * @description The time when the CLB instance expires.
     *
     * @example 2022-09-08T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The timestamp that indicates the expiration time of the CLB instance.
     *
     * @example 32493801600000
     *
     * @var int
     */
    public $endTimeStamp;

    /**
     * @description The metering method of the CLB instance. Valid values:
     *
     *   **PayBySpec** (default)
     *   **PayByCLCU**
     *
     * > This parameter is available only on the China site and takes effect only when **PayType** is set to **PayOnDemand**.
     * @example PayBySpec
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Internet-facing CLB instance. Valid values:
     *
     *   **paybytraffic**
     *   **paybybandwidth**
     *
     * @example paybytraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The frontend port used by the CLB instance.
     *
     * @var listenerPorts
     */
    public $listenerPorts;

    /**
     * @description The ports or protocols of the listeners.
     *
     * @var listenerPortsAndProtocal
     */
    public $listenerPortsAndProtocal;

    /**
     * @description The ports or protocols of the listeners.
     *
     * @var listenerPortsAndProtocol
     */
    public $listenerPortsAndProtocol;

    /**
     * @description The CLB instance ID.
     *
     * @example lb-bp1b6c719dfa08ex****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The name of the CLB instance.
     *
     * @example lb-instance-test
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
     *   **inactive**: The CLB instance is disabled. CLB instances in the inactive state do not forward traffic.
     *   **active**: The CLB instance is running as expected. Newly created CLB instances are in the **active** state by default.
     *   **locked**: The CLB instance is locked. CLB instances may be locked due to overdue payments or other reasons.
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
     * @description The reason why the configuration read-only mode is enabled. The value is 1 to 80 characters in length. It starts with a letter and can contain digits, periods (.), underscores (_), and hyphens (-).
     *
     * >  This parameter is valid only when **ModificationProtectionStatus** is set to **ConsoleProtection**.
     * @example Managed instance
     *
     * @var string
     */
    public $modificationProtectionReason;

    /**
     * @description Indicates whether the configuration read-only mode is enabled. Valid values:
     *
     *   **NonProtection**: The configuration read-only mode is disabled. After you disable the configuration read-only mode, the value of **ModificationProtectionReason** is cleared.
     *   **ConsoleProtection**: The configuration read-only mode is enabled.
     *
     * >  If this parameter is set to **ConsoleProtection**, you cannot modify instance configurations in the CLB console. However, you can modify instance configurations by calling API operations.
     * @example ConsoleProtection
     *
     * @var string
     */
    public $modificationProtectionStatus;

    /**
     * @description The network type of the CLB instance.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The billing method of the CLB instance. Valid values:
     *
     *   Only **PayOnDemand** may be returned, which indicates the pay-as-you-go billing method.
     *
     * @example PayOnDemand
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID of the CLB instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The alias of the region to which the CLB instance belongs.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $regionIdAlias;

    /**
     * @description The auto-renewal cycle. Valid values: **Year** and **Month**. Default value: Month.
     *
     * >  This parameter is valid only if you create a subscription CLB instance on the Alibaba Cloud China site. In this case, **PayType** must be set to **PrePay** and **RenewalStatus** must be set to **AutoRenewal**.
     * @example Month
     *
     * @var string
     */
    public $renewalCycUnit;

    /**
     * @description The auto-renewal duration. This parameter is valid only if **RenewalStatus** is set to **AutoRenewal**.
     *
     *   Valid values when **PeriodUnit** is set to **Year**: **1**, **2**, and **3**.
     *
     *   Valid values when **PeriodUnit** is set to **Month**: **1**, **2**, **3**, and **6**.
     *
     * > This parameter is valid only when you create a subscription CLB instance on the Alibaba Cloud China site. In this case, the **PayType** parameter must be set to **PrePay**.
     * @example 1
     *
     * @var int
     */
    public $renewalDuration;

    /**
     * @description Indicates whether auto-renewal is enabled. Valid values:
     *
     *   **AutoRenewal**: Auto-renewal is enabled.
     *
     *   **Normal**: Auto-renewal is disabled. You must manually renew the CLB instance.
     *
     *   **NotRenewal**: The CLB instance will not be renewed upon expiration. If this value is returned, the system does not send notifications until three days before the expiration date.
     *
     **
     *
     **Note** This parameter is valid only when you create a subscription CLB instance on the Alibaba Cloud China site. In this case, **PayType** must be set to **PrePay**.
     *
     * @example AutoRenewal
     *
     * @var string
     */
    public $renewalStatus;

    /**
     * @description The request ID.
     *
     * @example 365F4154-92F6-4AE4-92F8-7FF34B540710
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-atstuj3rtop****
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
     * @description The tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the vSwitch to which the internal-facing CLB instance belongs.
     *
     * @example vsw-255ecrwq5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) where the internal-facing CLB instance is deployed.
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
        'autoReleaseTime'              => 'AutoReleaseTime',
        'backendServers'               => 'BackendServers',
        'bandwidth'                    => 'Bandwidth',
        'createTime'                   => 'CreateTime',
        'createTimeStamp'              => 'CreateTimeStamp',
        'deleteProtection'             => 'DeleteProtection',
        'endTime'                      => 'EndTime',
        'endTimeStamp'                 => 'EndTimeStamp',
        'instanceChargeType'           => 'InstanceChargeType',
        'internetChargeType'           => 'InternetChargeType',
        'listenerPorts'                => 'ListenerPorts',
        'listenerPortsAndProtocal'     => 'ListenerPortsAndProtocal',
        'listenerPortsAndProtocol'     => 'ListenerPortsAndProtocol',
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
        'renewalCycUnit'               => 'RenewalCycUnit',
        'renewalDuration'              => 'RenewalDuration',
        'renewalStatus'                => 'RenewalStatus',
        'requestId'                    => 'RequestId',
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
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->listenerPorts) {
            $res['ListenerPorts'] = null !== $this->listenerPorts ? $this->listenerPorts->toMap() : null;
        }
        if (null !== $this->listenerPortsAndProtocal) {
            $res['ListenerPortsAndProtocal'] = null !== $this->listenerPortsAndProtocal ? $this->listenerPortsAndProtocal->toMap() : null;
        }
        if (null !== $this->listenerPortsAndProtocol) {
            $res['ListenerPortsAndProtocol'] = null !== $this->listenerPortsAndProtocol ? $this->listenerPortsAndProtocol->toMap() : null;
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
        if (null !== $this->renewalCycUnit) {
            $res['RenewalCycUnit'] = $this->renewalCycUnit;
        }
        if (null !== $this->renewalDuration) {
            $res['RenewalDuration'] = $this->renewalDuration;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeLoadBalancerAttributeResponseBody
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
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['ListenerPorts'])) {
            $model->listenerPorts = listenerPorts::fromMap($map['ListenerPorts']);
        }
        if (isset($map['ListenerPortsAndProtocal'])) {
            $model->listenerPortsAndProtocal = listenerPortsAndProtocal::fromMap($map['ListenerPortsAndProtocal']);
        }
        if (isset($map['ListenerPortsAndProtocol'])) {
            $model->listenerPortsAndProtocol = listenerPortsAndProtocol::fromMap($map['ListenerPortsAndProtocol']);
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
        if (isset($map['RenewalCycUnit'])) {
            $model->renewalCycUnit = $map['RenewalCycUnit'];
        }
        if (isset($map['RenewalDuration'])) {
            $model->renewalDuration = $map['RenewalDuration'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
