<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateVersionRequest;

use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description The description of secondary ENI N. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`. The value of N in `NetworkInterface.N` cannot be greater than 1.
     *
     * @example testNetworkInterfaceDescription
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
     * @description The name of secondary ENI N. The value of N in `NetworkInterface.N` cannot be greater than 1.
     *
     * @example testNetworkInterfaceName
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
     * @description The primary private IP address of secondary ENI N. The value of N in `NetworkInterface.N` cannot be greater than 1.
     *
     * @example 192.168.**.**
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description The ID of the security group to which to assign secondary ENI N. The security groups of secondary ENI N and of the instance must belong to the same VPC. The value of N in `NetworkInterface.N` cannot be greater than 1.
     *
     * >  You cannot specify both the `NetworkInterface.N.SecurityGroupId` and `NetworkInterface.N.SecurityGroupIds.N` parameters.
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
     * @description The ID of the vSwitch to which to connect secondary ENI N. The instance and the ENI must be located within the same zone of the same VPC, but they can be connected to different vSwitches. The value of N in `NetworkInterface.N` cannot be greater than 1.
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
