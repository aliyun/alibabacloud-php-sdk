<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description The domain name of the master instance.
     *
     * @example cluster.local
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description The IP version that is supported by the master instance. Valid values: - ipv4: IPv4. - ipv6: IPv6. - dual: IPv4 and IPv6.
     *
     * @example ipv4
     *
     * @var string
     */
    public $IPStack;

    /**
     * @description The ID of the associated security group.
     *
     * @var string[]
     */
    public $securityGroupIDs;

    /**
     * @description A list of the vSwitches that are used by the master instance.
     *
     * @var string[]
     */
    public $vSwitches;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the master instance resides.
     *
     * @example vpc-f8ziib1019r9o0hdv2***
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterDomain'    => 'ClusterDomain',
        'IPStack'          => 'IPStack',
        'securityGroupIDs' => 'SecurityGroupIDs',
        'vSwitches'        => 'VSwitches',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDomain) {
            $res['ClusterDomain'] = $this->clusterDomain;
        }
        if (null !== $this->IPStack) {
            $res['IPStack'] = $this->IPStack;
        }
        if (null !== $this->securityGroupIDs) {
            $res['SecurityGroupIDs'] = $this->securityGroupIDs;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDomain'])) {
            $model->clusterDomain = $map['ClusterDomain'];
        }
        if (isset($map['IPStack'])) {
            $model->IPStack = $map['IPStack'];
        }
        if (isset($map['SecurityGroupIDs'])) {
            if (!empty($map['SecurityGroupIDs'])) {
                $model->securityGroupIDs = $map['SecurityGroupIDs'];
            }
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = $map['VSwitches'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
