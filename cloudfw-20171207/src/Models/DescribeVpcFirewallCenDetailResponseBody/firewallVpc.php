<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody;

use AlibabaCloud\Tea\Model;

class firewallVpc extends Model
{
    /**
     * @var int
     */
    public $allowConfiguration;

    /**
     * @var string
     */
    public $vpcCidr;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchCidr;

    /**
     * @var string
     */
    public $vswitchId;

    /**
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
