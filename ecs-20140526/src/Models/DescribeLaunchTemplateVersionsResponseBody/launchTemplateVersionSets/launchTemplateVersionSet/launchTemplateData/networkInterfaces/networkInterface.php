<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\networkInterfaces;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeLaunchTemplateVersionsResponseBody\launchTemplateVersionSets\launchTemplateVersionSet\launchTemplateData\networkInterfaces\networkInterface\securityGroupIds;
use AlibabaCloud\Tea\Model;

class networkInterface extends Model
{
    /**
     * @description Indicates whether to retain the ENI when the associated instance is released. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $deleteOnRelease;

    /**
     * @description The description of the secondary ENI.
     *
     * @example testNetworkInterfacesDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance type of the instance.
     *
     * @example ecs.s2.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the secondary ENI.
     *
     * @example testNetworkInterfaceName
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
     * @description The primary private IP address of the secondary ENI.
     *
     * @example 203.0.*.*
     *
     * @var string
     */
    public $primaryIpAddress;

    /**
     * @description The ID of the security group to which to assign the secondary ENI. The security group and the ENI must belong to the same VPC.
     *
     * >  SecurityGroupId and SecurityGroupIds are mutually exclusive in the response.
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The IDs of the security groups to which to assign the secondary ENI.
     *
     * >  SecurityGroupId and SecurityGroupIds are mutually exclusive in the response.
     * @var securityGroupIds
     */
    public $securityGroupIds;

    /**
     * @description The ID of the vSwitch to which to connect the ENI.
     *
     * @example vsw-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'deleteOnRelease'             => 'DeleteOnRelease',
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
            $res['SecurityGroupIds'] = null !== $this->securityGroupIds ? $this->securityGroupIds->toMap() : null;
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
            $model->securityGroupIds = securityGroupIds::fromMap($map['SecurityGroupIds']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
