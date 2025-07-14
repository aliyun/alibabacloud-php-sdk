<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateLaunchTemplateRequest;

use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description Specifies whether to release ENI N when the instance is released. Valid values:
     *
     *   true
     *   false
     *
     * Default value: true.
     *
     * >  This parameter takes effect only for secondary ENIs.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteOnRelease;

    /**
     * @description The description of the secondary ENI. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`. The value of N in `NetworkInterface.N` cannot be greater than 1.
     *
     * @example testEniDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of ENI N. Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *
     * Valid values:
     *
     *   Primary
     *   Secondary
     *
     * Default value: Secondary.
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
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If you set `NetworkInterface.N.InstanceType` to `Primary`, you do not need to specify this parameter.
     *
     * @example testEniName
     *
     * @var string
     */
    public $networkInterfaceName;

    /**
     * @description The communication mode of the primary ENI. Valid values:
     *
     *   Standard: uses the TCP communication mode.
     *   HighPerformance: uses the remote direct memory access (RDMA) communication mode with Elastic RDMA Interface (ERI) enabled.
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
     *   If the value of N is 1, you can configure a primary or secondary ENI. If you specify this parameter, set `Amount` to a numeric value greater than 1, and set NetworkInterface.N.InstanceType to Primary, the specified number of instances are created and consecutive primary IP addresses starting from the specified IP address are assigned to the instances. In this case, you cannot attach secondary ENIs to the instances.
     *   If the value of N is 2, you must configure a primary ENI and a secondary ENI. If you specify this parameter, set `Amount` to a numeric value greater than 1, and set NetworkInterface.N.InstanceType to Primary, you cannot set `NetworkInterface.2.InstanceType` to Secondary to attach a secondary ENI.
     *
     *   If you set `NetworkInterface.N.InstanceType` to `Primary`, this parameter is equivalent to `PrivateIpAddress`. You cannot specify both this parameter and `PrivateIpAddress` in the same request.
     *
     *   If you set `NetworkInterface.N.InstanceType` to `Secondary` or leave NetworkInterface.N.InstanceType empty, the specified primary IP address is assigned to the secondary ENI. The default value is an IP address that is randomly selected from within the CIDR block of the vSwitch to which to connect the secondary ENI.
     *
     * >  You can attach only a single secondary ENI when you create an instance. After the instance is created, you can call the [CreateNetworkInterface](https://help.aliyun.com/document_detail/58504.html) and [AttachNetworkInterface](https://help.aliyun.com/document_detail/58515.html) operations to attach more secondary ENIs.
     *
     * @example ``192.168.**.**``
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description The ID of the security group to which to assign ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If you set `NetworkInterface.N.InstanceType` to `Primary`, you must specify this parameter. In this case, this parameter is equivalent to `SecurityGroupId`, and you cannot specify `SecurityGroupId`, `SecurityGroupIds.N`, or `NetworkInterface.N.SecurityGroupIds.N`.
     *   If you set `NetworkInterface.N.InstanceType` to `Secondary` or leave NetworkInterface.N.InstanceType empty, you do not need to specify this parameter. The default value is the ID of the security group to which to assign the instance.
     *
     * @example sg-bp15ed6xe1yxeycg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of security groups to which to assign ENI N.
     *
     *   Valid values of the first N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   The second N in this parameter indicates that one or more security group IDs can be specified. The valid values of N vary based on the maximum number of security groups to which an instance can belong. For more information, see the [Security group limits](~~25412#SecurityGroupQuota1~~) section of the "Limits" topic.
     *
     * Take note of the following items:
     *
     *   If you set `NetworkInterface.N.InstanceType` to `Primary`, you must specify this parameter or `NetworkInterface.N.SecurityGroupId`. In this case, this parameter is equivalent to `SecurityGroupIds.N`, and you cannot specify `SecurityGroupId`, `SecurityGroupIds.N`, or `NetworkInterface.N.SecurityGroupId`.
     *   If you set `NetworkInterface.N.InstanceType` to `Secondary` or leave NetworkInterface.N.InstanceType empty, you do not need to specify this parameter. The default value is the ID of the security group to which to assign the instance.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The ID of the vSwitch to which to connect ENI N.
     *
     * Take note of the following items:
     *
     *   Valid values of N: 1 and 2. If the value of N is 1, you can configure a primary or secondary ENI. If the value of N is 2, you must configure a primary ENI and a secondary ENI.
     *   If you set `NetworkInterface.N.InstanceType` to `Primary`, you must specify this parameter. In this case, this parameter is equivalent to `VSwitchId`. You cannot specify both NetworkInterface.N.VSwitchId and `VSwitchId` in the same request.
     *   If you set `NetworkInterface.N.InstanceType` to `Secondary` or leave NetworkInterface.N.InstanceType empty, you do not need to specify this parameter. The default value is the VSwitchId value.
     *
     * @example vsw-bp1s5fnvk4gn2tws0****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'deleteOnRelease' => 'DeleteOnRelease',
        'description' => 'Description',
        'instanceType' => 'InstanceType',
        'networkInterfaceName' => 'NetworkInterfaceName',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'primaryIpAddress' => 'PrimaryIpAddress',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupIds' => 'SecurityGroupIds',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteOnRelease) {
            $res['DeleteOnRelease'] = $this->deleteOnRelease;
        }
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
        if (isset($map['DeleteOnRelease'])) {
            $model->deleteOnRelease = $map['DeleteOnRelease'];
        }
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
