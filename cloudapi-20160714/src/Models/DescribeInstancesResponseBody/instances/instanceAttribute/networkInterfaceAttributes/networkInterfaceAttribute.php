<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\networkInterfaceAttributes;

use AlibabaCloud\Tea\Model;

class networkInterfaceAttribute extends Model
{
    /**
     * @description vSwitch的网段。
     *
     * @example 192.168.17.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description 弹性网卡ID
     *
     * @example eni-bp1e5ag59flni1y2f44w
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @description 安全组的ID，同一个安全组内的服务可以互相访问。
     *
     * @example sg-2zeehz13zcyj1kfk3o85
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 虚拟交换机ID
     *
     * @example vsw-2zeqals6rbj51bhjn8b89
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description 可用区ID
     *
     * @example cn-shenzhen-d
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidrBlock'          => 'CidrBlock',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'securityGroupId'    => 'SecurityGroupId',
        'vswitchId'          => 'VswitchId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
