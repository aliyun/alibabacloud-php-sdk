<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\Tea\Model;

class networkInterfaces extends Model
{
    /**
     * @description The ENI type. Valid values:
     *
     *   Primary: the primary ENI
     *   Secondary: the secondary ENI
     *
     * @example Primary
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The number of randomly generated IPv6 addresses that are allocated to the primary ENI.
     *
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The communication mode of the ENI. Valid values:
     *
     *   Standard: The TCP communication mode is used.
     *   HighPerformance: The Elastic RDMA Interface (ERI) is enabled and the remote direct memory access (RDMA) communication mode is used.
     *
     * @example HighPerformance
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The IDs of the security groups to which the ENIs belong.
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
