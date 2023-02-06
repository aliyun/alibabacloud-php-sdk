<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateRequest;

use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description The description of secondary ENI N. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`. The value of N in `NetworkInterface.N` cannot be greater than 1.
     *
     * @example testEniDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you can configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you do not need to set this parameter.
     *
     * @example testEniName
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The communication mode of primary ENI N. Valid values:
     *
     *   Standard: uses the TCP communication mode.
     *   HighPerformance: enables the Elastic RDMA Interface (ERI) and uses the remote direct memory access (RDMA) communication mode.
     *
     * Take note of the following items:
     *
     *   This parameter is valid only when `NetworkInterface.N.InstanceType` is set to `Primary`. If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, you cannot set this parameter.
     *   If you set this parameter to HighPerformance, you can create instances only of the c7re RDMA-enhanced instance family. The maximum number of ENIs in RDMA mode that can be bound to a c7re instance is determined based on the instance type. The c7re instance family is in invitational preview in Beijing Zone K. For more information, see [Instance family](~~25378~~).
     *
     * @example Standard
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The primary IP address to assign to ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2.
     *
     *   If the value of N is 1, you can configure a primary or secondary ENI. If this parameter is specified, `Amount` is set to a numeric value greater than 1, and NetworkInterface.N.InstanceType is set to Primary, the specified number of instances are created and consecutive primary IP addresses starting from the specified one are assigned to the instances. In this case, you cannot bind secondary ENIs to these instances.
     *   If the value of N is 2, you can configure a primary ENI and a secondary ENI. If this parameter is specified, `Amount` is set to a numeric value greater than 1, and NetworkInterface.N.InstanceType is set to Primary, you cannot set `NetworkInterface.2.InstanceType` to Secondary to bind a secondary ENI.
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, this parameter is equivalent to `PrivateIpAddress` and you cannot specify `PrivateIpAddress`.
     *
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, the specified primary IP address is assigned to the secondary ENI. The default value is an IP address that is randomly selected from within the CIDR block of the vSwitch with which to associate the secondary ENI.
     *
     * >  You can bind only a single secondary ENI when you create an instance. After the instance is created, you can call the [CreateNetworkInterface](~~58504~~) and [AttachNetworkInterface](~~58515~~) operations to bind more secondary ENIs.
     * @example 192.168.**.**
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description The ID of the security group to which to assign ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you can configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must set this parameter. In this case, this parameter is equivalent to `SecurityGroupId` and you cannot specify `SecurityGroupId`, `SecurityGroupIds.N`, or `NetworkInterface.N.SecurityGroupIds.N`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the ID of the security group to which to assign the ECS instance.
     *
     * @example sg-bp15ed6xe1yxeycg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups to which the ENI belongs.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The ID of the vSwitch with which to associate ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you can configure a primary ENI and a secondary ENI.
     *   If `NetworkInterface.N.InstanceType` is set to `Primary`, you must set this parameter. In this case, this parameter is equivalent to `VSwitchId` and you cannot specify `VSwitchId`.
     *   If `NetworkInterface.N.InstanceType` is set to `Secondary` or left empty, this parameter is optional. The default value is the ID of the vSwitch to which to connect the ECS instance.
     *
     * @example vsw-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'description'                 => 'Description',
        'instanceType'                => 'InstanceType',
        'networkInterfaceName'        => 'NetworkInterfaceName',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'primaryIpAddress'            => 'PrimaryIpAddress',
        'securityGroupId'             => 'SecurityGroupId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'vSwitchId'                   => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->networkInterfaceName) {
            $res['NetworkInterfaceName'] = $this->networkInterfaceName;
        }
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->primaryIpAddress) {
            $res['PrimaryIpAddress'] = $this->primaryIpAddress;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterface
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NetworkInterfaceName'])) {
            $model->networkInterfaceName = $map['NetworkInterfaceName'];
        }
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['PrimaryIpAddress'])) {
            $model->primaryIpAddress = $map['PrimaryIpAddress'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
