<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class networkInterfaces extends Model
{
    /**
     * @description The ENI type. If you specify this parameter, you must use NetworkInterfaces to specify a primary ENI. In addition, you cannot specify SecurityGroupId or SecurityGroupIds. Valid values:
     *
     *   Primary: the primary ENI.
     *   Secondary: the secondary ENI.
     *
     * Default value: Secondary.
     * @example Primary
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The number of randomly generated IPv6 addresses that you want to allocate to the primary ENI. Before you specify this parameter, take note of the following items:
     *
     * After you specify this parameter, you can no longer specify Ipv6AddressCount.
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The communication mode of the ENI. Valid values:
     *
     *   Standard: uses the TCP communication mode.
     *   HighPerformance: uses the remote direct memory access (RDMA) communication mode with Elastic RDMA Interface (ERI) enabled.
     *
     * >  The number of ERIs on an instance cannot exceed the maximum number of ERIs supported by the instance type. For more information, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     * @example HighPerformance
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The IDs of the security groups to which you want to assign the ENI.
     *
     * @var string[]
     */
    public $securityGroupIds;
    protected $_name = [
        'instanceType'                => 'InstanceType',
        'ipv6AddressCount'            => 'Ipv6AddressCount',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'securityGroupIds'            => 'SecurityGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }

        return $model;
    }
}
