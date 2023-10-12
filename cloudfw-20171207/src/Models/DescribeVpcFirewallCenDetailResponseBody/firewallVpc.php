<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody;

use AlibabaCloud\Tea\Model;

class firewallVpc extends Model
{
    /**
     * @description Indicates whether you can specify a CIDR block when you create a VPC firewall for a Basic Edition transit router of a CEN instance. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var int
     */
    public $allowConfiguration;

    /**
     * @description The CIDR block of the VPC.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $vpcCidr;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1245k5oagy2bp74****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The CIDR block of the vSwitch.
     *
     * @example 10.0.0.1/24
     *
     * @var string
     */
    public $vswitchCidr;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1sqg9wms9wxcs1****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allowConfiguration' => 'AllowConfiguration',
        'vpcCidr'            => 'VpcCidr',
        'vpcId'              => 'VpcId',
        'vswitchCidr'        => 'VswitchCidr',
        'vswitchId'          => 'VswitchId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowConfiguration) {
            $res['AllowConfiguration'] = $this->allowConfiguration;
        }
        if (null !== $this->vpcCidr) {
            $res['VpcCidr'] = $this->vpcCidr;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchCidr) {
            $res['VswitchCidr'] = $this->vswitchCidr;
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
     * @return firewallVpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowConfiguration'])) {
            $model->allowConfiguration = $map['AllowConfiguration'];
        }
        if (isset($map['VpcCidr'])) {
            $model->vpcCidr = $map['VpcCidr'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchCidr'])) {
            $model->vswitchCidr = $map['VswitchCidr'];
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
