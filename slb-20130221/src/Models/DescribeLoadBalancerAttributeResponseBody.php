<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerAttributeResponseBody\backendServers;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerAttributeResponseBody\listenerPorts;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocal;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeLoadBalancerAttributeResponseBody\listenerPortsAndProtocol;

class DescribeLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var int
     */
    public $autoReleaseTime;

    /**
     * @var backendServers
     */
    public $backendServers;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimeStamp;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $endTimeStamp;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $isPublicAddress;

    /**
     * @var listenerPorts
     */
    public $listenerPorts;

    /**
     * @var listenerPortsAndProtocal
     */
    public $listenerPortsAndProtocal;

    /**
     * @var listenerPortsAndProtocol
     */
    public $listenerPortsAndProtocol;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @var string
     */
    public $masterZoneId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionIdAlias;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $slaveZoneId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'address' => 'Address',
        'addressType' => 'AddressType',
        'autoReleaseTime' => 'AutoReleaseTime',
        'backendServers' => 'BackendServers',
        'bandwidth' => 'Bandwidth',
        'createTime' => 'CreateTime',
        'createTimeStamp' => 'CreateTimeStamp',
        'endTime' => 'EndTime',
        'endTimeStamp' => 'EndTimeStamp',
        'internetChargeType' => 'InternetChargeType',
        'isPublicAddress' => 'IsPublicAddress',
        'listenerPorts' => 'ListenerPorts',
        'listenerPortsAndProtocal' => 'ListenerPortsAndProtocal',
        'listenerPortsAndProtocol' => 'ListenerPortsAndProtocol',
        'loadBalancerId' => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerSpec' => 'LoadBalancerSpec',
        'loadBalancerStatus' => 'LoadBalancerStatus',
        'masterZoneId' => 'MasterZoneId',
        'networkType' => 'NetworkType',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'regionIdAlias' => 'RegionIdAlias',
        'requestId' => 'RequestId',
        'slaveZoneId' => 'SlaveZoneId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->backendServers) {
            $this->backendServers->validate();
        }
        if (null !== $this->listenerPorts) {
            $this->listenerPorts->validate();
        }
        if (null !== $this->listenerPortsAndProtocal) {
            $this->listenerPortsAndProtocal->validate();
        }
        if (null !== $this->listenerPortsAndProtocol) {
            $this->listenerPortsAndProtocol->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }

        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toArray($noStream) : $this->backendServers;
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->isPublicAddress) {
            $res['IsPublicAddress'] = $this->isPublicAddress;
        }

        if (null !== $this->listenerPorts) {
            $res['ListenerPorts'] = null !== $this->listenerPorts ? $this->listenerPorts->toArray($noStream) : $this->listenerPorts;
        }

        if (null !== $this->listenerPortsAndProtocal) {
            $res['ListenerPortsAndProtocal'] = null !== $this->listenerPortsAndProtocal ? $this->listenerPortsAndProtocal->toArray($noStream) : $this->listenerPortsAndProtocal;
        }

        if (null !== $this->listenerPortsAndProtocol) {
            $res['ListenerPortsAndProtocol'] = null !== $this->listenerPortsAndProtocol ? $this->listenerPortsAndProtocol->toArray($noStream) : $this->listenerPortsAndProtocol;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slaveZoneId) {
            $res['SlaveZoneId'] = $this->slaveZoneId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['IsPublicAddress'])) {
            $model->isPublicAddress = $map['IsPublicAddress'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlaveZoneId'])) {
            $model->slaveZoneId = $map['SlaveZoneId'];
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
