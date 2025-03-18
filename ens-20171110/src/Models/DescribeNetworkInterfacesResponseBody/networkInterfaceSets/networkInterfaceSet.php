<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\ipv6Sets;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\privateIpSets;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet\securityGroupIds;
use AlibabaCloud\Tea\Model;

class networkInterfaceSet extends Model
{
    /**
     * @description The time when the ENI was created. Specify the time in the ISO 8601 standard in the yyyy-MM-ddThh:mmZ format. The time is displayed in UTC.
     *
     * @example 2022-02-22T03:53:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of ENI.
     *
     * @example test-description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the edge node.
     *
     * @example id-jakarta-1
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance to which the ENI is bound.
     *
     * @example i-5siavnr3
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IPv6 addresses of the ENIs.
     *
     * @var ipv6Sets
     */
    public $ipv6Sets;

    /**
     * @description The MAC address of the ENI.
     *
     * @example 00:16:3e:08:60:0a
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description The ID of the network.
     *
     * @example n-5w0qd03adw****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-uf686a5
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description The ENI name.
     *
     * @example primaryTest
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The private IP address of the server.
     *
     * @example 12.23.3.4
     *
     * @var string
     */
    public $primaryIp;

    /**
     * @description The primary private IP address. Valid values:
     *
     *   **Public**: public IP address.
     *   **Private**: internal IP address.
     *
     * @example private
     *
     * @var string
     */
    public $primaryIpType;

    /**
     * @description Details about the private IP address.
     *
     * @var privateIpSets
     */
    public $privateIpSets;

    /**
     * @description The ID of the security group.
     *
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The status of the ENI. Valid values:
     *
     *   Available: The ENI is available.
     *   Attaching: The ENI is being attached to an instance.
     *   InUse: The ENI is attached to an instance.
     *   Detaching: The ENI is being detached from an instance.
     *   Deleting: The ENI is being deleted.
     *
     * @example In_use
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the ENI. Valid values:
     *
     *   Primary
     *   Secondary
     *
     * @example Primary
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-5rqswx1trlsj9
     *
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

    public function validate() {}

    public function toMap()
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
            $res['Ipv6Sets'] = null !== $this->ipv6Sets ? $this->ipv6Sets->toMap() : null;
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
            $res['PrivateIpSets'] = null !== $this->privateIpSets ? $this->privateIpSets->toMap() : null;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return networkInterfaceSet
     */
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
