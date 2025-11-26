<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\ipv6Sets;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\privateIpSets;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\securityGroupIds;

class networkInterfaceSet extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var ipv6Sets
     */
    public $ipv6Sets;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @var string
     */
    public $primaryIp;

    /**
     * @var string
     */
    public $primaryIpType;

    /**
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'instanceId' => 'InstanceId',
        'ipv6Sets' => 'Ipv6Sets',
        'macAddress' => 'MacAddress',
        'networkId' => 'NetworkId',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'primaryIp' => 'PrimaryIp',
        'primaryIpType' => 'PrimaryIpType',
        'privateIpSets' => 'PrivateIpSets',
        'securityGroupIds' => 'SecurityGroupIds',
        'status' => 'Status',
        'type' => 'Type',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->ipv6Sets) {
            $this->ipv6Sets->validate();
        }
        if (null !== $this->privateIpSets) {
            $this->privateIpSets->validate();
        }
        if (null !== $this->securityGroupIds) {
            $this->securityGroupIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipv6Sets) {
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toArray($noStream) : $this->ipv6Sets;
        }

        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }

        if (null !== $this->primaryIp) {
            $res['PrimaryIp'] = $this->primaryIp;
        }

        if (null !== $this->primaryIpType) {
            $res['PrimaryIpType'] = $this->primaryIpType;
        }

        if (null !== $this->privateIpSets) {
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toArray($noStream) : $this->privateIpSets;
        }

        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toArray($noStream) : $this->securityGroupIds;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ipv6Sets'])) {
            $model->ipv6Sets = ipv6Sets::fromMap($map['Ipv6Sets']);
        }

        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }

        if (isset($map['PrimaryIp'])) {
            $model->primaryIp = $map['PrimaryIp'];
        }

        if (isset($map['PrimaryIpType'])) {
            $model->primaryIpType = $map['PrimaryIpType'];
        }

        if (isset($map['PrivateIpSets'])) {
            $model->privateIpSets = privateIpSets::fromMap($map['PrivateIpSets']);
        }

        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
