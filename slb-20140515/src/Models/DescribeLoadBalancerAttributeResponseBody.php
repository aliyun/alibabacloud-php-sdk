<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\backendServers;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPorts;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocal;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var listenerPortsAndProtocal
     */
    public $listenerPortsAndProtocal;

    /**
     * @var backendServers
     */
    public $backendServers;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $modificationProtectionReason;

    /**
     * @var listenerPorts
     */
    public $listenerPorts;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $renewalStatus;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $deleteProtection;

    /**
     * @var int
     */
    public $endTimeStamp;

    /**
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @var int
     */
    public $autoReleaseTime;

    /**
     * @var int
     */
    public $renewalDuration;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var listenerPortsAndProtocol
     */
    public $listenerPortsAndProtocol;

    /**
     * @var string
     */
    public $modificationProtectionStatus;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $masterZoneId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $renewalCycUnit;

    /**
     * @var string
     */
    public $slaveZoneId;

    /**
     * @var string
     */
    public $regionIdAlias;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var int
     */
    public $createTimeStamp;
    protected $_name = [
        'address'                      => 'Address',
        'resourceGroupId'              => 'ResourceGroupId',
        'listenerPortsAndProtocal'     => 'ListenerPortsAndProtocal',
        'backendServers'               => 'BackendServers',
        'loadBalancerSpec'             => 'LoadBalancerSpec',
        'modificationProtectionReason' => 'ModificationProtectionReason',
        'listenerPorts'                => 'ListenerPorts',
        'requestId'                    => 'RequestId',
        'vSwitchId'                    => 'VSwitchId',
        'renewalStatus'                => 'RenewalStatus',
        'payType'                      => 'PayType',
        'internetChargeType'           => 'InternetChargeType',
        'vpcId'                        => 'VpcId',
        'deleteProtection'             => 'DeleteProtection',
        'endTimeStamp'                 => 'EndTimeStamp',
        'loadBalancerStatus'           => 'LoadBalancerStatus',
        'autoReleaseTime'              => 'AutoReleaseTime',
        'renewalDuration'              => 'RenewalDuration',
        'endTime'                      => 'EndTime',
        'addressIPVersion'             => 'AddressIPVersion',
        'loadBalancerId'               => 'LoadBalancerId',
        'listenerPortsAndProtocol'     => 'ListenerPortsAndProtocol',
        'modificationProtectionStatus' => 'ModificationProtectionStatus',
        'networkType'                  => 'NetworkType',
        'bandwidth'                    => 'Bandwidth',
        'masterZoneId'                 => 'MasterZoneId',
        'createTime'                   => 'CreateTime',
        'renewalCycUnit'               => 'RenewalCycUnit',
        'slaveZoneId'                  => 'SlaveZoneId',
        'regionIdAlias'                => 'RegionIdAlias',
        'loadBalancerName'             => 'LoadBalancerName',
        'regionId'                     => 'RegionId',
        'addressType'                  => 'AddressType',
        'createTimeStamp'              => 'CreateTimeStamp',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->listenerPortsAndProtocal) {
            $res['ListenerPortsAndProtocal'] = null !== $this->listenerPortsAndProtocal ? $this->listenerPortsAndProtocal->toMap() : null;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }
        if (null !== $this->loadBalancerSpec) {
            $res['LoadBalancerSpec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->modificationProtectionReason) {
            $res['ModificationProtectionReason'] = $this->modificationProtectionReason;
        }
        if (null !== $this->listenerPorts) {
            $res['ListenerPorts'] = null !== $this->listenerPorts ? $this->listenerPorts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->renewalStatus) {
            $res['RenewalStatus'] = $this->renewalStatus;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->deleteProtection) {
            $res['DeleteProtection'] = $this->deleteProtection;
        }
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->renewalDuration) {
            $res['RenewalDuration'] = $this->renewalDuration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->listenerPortsAndProtocol) {
            $res['ListenerPortsAndProtocol'] = null !== $this->listenerPortsAndProtocol ? $this->listenerPortsAndProtocol->toMap() : null;
        }
        if (null !== $this->modificationProtectionStatus) {
            $res['ModificationProtectionStatus'] = $this->modificationProtectionStatus;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->masterZoneId) {
            $res['MasterZoneId'] = $this->masterZoneId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->renewalCycUnit) {
            $res['RenewalCycUnit'] = $this->renewalCycUnit;
        }
        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
        }
        if (null !== $this->regionIdAlias) {
            $res['RegionIdAlias'] = $this->regionIdAlias;
        }
        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->createTimeStamp) {
            $res['CreateTimeStamp'] = $this->createTimeStamp;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ListenerPortsAndProtocal'])) {
            $model->listenerPortsAndProtocal = listenerPortsAndProtocal::fromMap($map['ListenerPortsAndProtocal']);
        }
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }
        if (isset($map['LoadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['LoadBalancerSpec'];
        }
        if (isset($map['ModificationProtectionReason'])) {
            $model->modificationProtectionReason = $map['ModificationProtectionReason'];
        }
        if (isset($map['ListenerPorts'])) {
            $model->listenerPorts = listenerPorts::fromMap($map['ListenerPorts']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['RenewalStatus'])) {
            $model->renewalStatus = $map['RenewalStatus'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['DeleteProtection'])) {
            $model->deleteProtection = $map['DeleteProtection'];
        }
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['RenewalDuration'])) {
            $model->renewalDuration = $map['RenewalDuration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ListenerPortsAndProtocol'])) {
            $model->listenerPortsAndProtocol = listenerPortsAndProtocol::fromMap($map['ListenerPortsAndProtocol']);
        }
        if (isset($map['ModificationProtectionStatus'])) {
            $model->modificationProtectionStatus = $map['ModificationProtectionStatus'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['MasterZoneId'])) {
            $model->masterZoneId = $map['MasterZoneId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RenewalCycUnit'])) {
            $model->renewalCycUnit = $map['RenewalCycUnit'];
        }
        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
        }
        if (isset($map['RegionIdAlias'])) {
            $model->regionIdAlias = $map['RegionIdAlias'];
        }
        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['CreateTimeStamp'])) {
            $model->createTimeStamp = $map['CreateTimeStamp'];
        }

        return $model;
    }
}
