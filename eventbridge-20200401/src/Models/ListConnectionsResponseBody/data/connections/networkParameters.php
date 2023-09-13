<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListConnectionsResponseBody\data\connections;

use AlibabaCloud\Tea\Model;

class networkParameters extends Model
{
    /**
     * @description The network type. Valid values:PublicNetwork and PrivateNetwork.
     *
     * @example PublicNetwork
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The security group ID.
     *
     * @example eb-167adad548759-security_grop/sg-bp1addad26peuh9qh9rtyb
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example eb-test/vpc-bp1symadadwnwgmqud
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1iu4x7aeradadown1og8,vsw-bp193sqmadadlaszpeqbt2c
     *
     * @var string
     */
    public $vswitcheId;
    protected $_name = [
        'networkType'     => 'NetworkType',
        'securityGroupId' => 'SecurityGroupId',
        'vpcId'           => 'VpcId',
        'vswitcheId'      => 'VswitcheId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitcheId) {
            $res['VswitcheId'] = $this->vswitcheId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitcheId'])) {
            $model->vswitcheId = $map['VswitcheId'];
        }

        return $model;
    }
}
