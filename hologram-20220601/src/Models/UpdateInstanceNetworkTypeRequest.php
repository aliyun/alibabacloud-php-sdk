<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceNetworkTypeRequest extends Model
{
    /**
     * @description Specifies whether to change the network type from AnyTunnel to SingleTunnel. This parameter is invalid for new instances. For new instances, this parameter is set to null by default.
     *
     * Valid values:
     *
     *   others/null: The network type is not changed from AnyTunnel to SingleTunnel.
     *   true: The network type is changed from AnyTunnel to SingleTunnel.
     *
     * @example true
     *
     * @var string
     */
    public $anyTunnelToSingleTunnel;

    /**
     * @description A list of network types that you want to enable. The network types are randomly ordered in the list. For example, the Internet, Intranet, and VPCSingleTunnel network types are enabled. If you want to disable the Internet type, set this parameter to Intranet,VPCSingleTunnel.
     *
     * Valid values:
     *
     *   VPCSingleTunnel: virtual private cloud (VPC).
     *   Intranet: internal network.
     *   VPCAnyTunnel: compatibility requirements. This value is not supported by new instances.
     *   Internet: Internet.
     *
     * @example Internet,VPCSingleTunnel
     *
     * @var string
     */
    public $networkTypes;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-2vccsiymtqr9aavew0vo3
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-t4netc3y5etlondfb5ra7
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 1999365732646672
     *
     * @var string
     */
    public $vpcOwnerId;

    /**
     * @description The region in which the VPC resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegionId;
    protected $_name = [
        'anyTunnelToSingleTunnel' => 'anyTunnelToSingleTunnel',
        'networkTypes' => 'networkTypes',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
        'vpcOwnerId' => 'vpcOwnerId',
        'vpcRegionId' => 'vpcRegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->anyTunnelToSingleTunnel) {
            $res['anyTunnelToSingleTunnel'] = $this->anyTunnelToSingleTunnel;
        }
        if (null !== $this->networkTypes) {
            $res['networkTypes'] = $this->networkTypes;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcOwnerId) {
            $res['vpcOwnerId'] = $this->vpcOwnerId;
        }
        if (null !== $this->vpcRegionId) {
            $res['vpcRegionId'] = $this->vpcRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceNetworkTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['anyTunnelToSingleTunnel'])) {
            $model->anyTunnelToSingleTunnel = $map['anyTunnelToSingleTunnel'];
        }
        if (isset($map['networkTypes'])) {
            $model->networkTypes = $map['networkTypes'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['vpcOwnerId'])) {
            $model->vpcOwnerId = $map['vpcOwnerId'];
        }
        if (isset($map['vpcRegionId'])) {
            $model->vpcRegionId = $map['vpcRegionId'];
        }

        return $model;
    }
}
