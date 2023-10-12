<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcFirewallCenConfigureRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-x5jayxou71ad73****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description Specifies whether to enable the VPC firewall. Valid values:
     *
     *   **open**: After you create the VPC firewall, the VPC firewall is automatically enabled. This is the default value.
     *   **close**: After you create the VPC firewall, the VPC firewall is disabled. You can call the [ModifyVpcFirewallCenSwitchStatus](~~345780~~) operation to manually enable the VPC firewall.
     *
     * @example open
     *
     * @var string
     */
    public $firewallSwitch;

    /**
     * @description The CIDR block of the vSwitch that is automatically created for the VPC firewall. You must specify a CIDR block for the Cloud_Firewall_VSWITCH VPC that is automatically created for the VPC firewall for traffic redirection. The CIDR block does not conflict with your network plan. The subnet mask of the CIDR block must be less than or equal to 29 bits in length. The CIDR block of the vSwitch must be within the network segment of the VPC.
     *
     * >  This parameter takes effect only when you create a VPC firewall for the first time in the current CEN instance and region.
     * @example 10.0.*.*\/28
     *
     * @var string
     */
    public $firewallVSwitchCidrBlock;

    /**
     * @description The CIDR block of the VPC that is automatically created for the VPC firewall. You must specify a CIDR block for the Cloud_Firewall_VPC VPC that is automatically created for the VPC firewall for traffic redirection. The subnet mask of the CIDR block must be less than or equal to 28 bits in length.
     *
     * >  This parameter takes effect only when you create a VPC firewall for the first time in the current CEN instance and region.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $firewallVpcCidrBlock;

    /**
     * @description The ID of the zone to which the vSwitch belongs. If your service is latency-sensitive, you can specify the same zone for the vSwitch of the firewall and the vSwitch of your business VPC to minimize latency.
     *
     * >  This parameter takes effect only when you create a VPC firewall for the first time in the current CEN instance and region. For more information about zones that are supported by each region, see [Query zones](~~36064~~).
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $firewallVpcZoneId;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The ID of the VPC for which you want to create the VPC firewall.
     *
     * @example vpc-bp10zlifxh6j0232w****
     *
     * @var string
     */
    public $networkInstanceId;

    /**
     * @description The ID of the vSwitch that is used to associate with the elastic network interface (ENI) required by the VPC firewall.
     *
     * @example vsw-qzeaol304m***
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The instance name of the VPC firewall.
     *
     * @example Test instance
     *
     * @var string
     */
    public $vpcFirewallName;

    /**
     * @description The ID of the region to which the VPC belongs.
     *
     * > For more information about the regions, see [Supported regions](~~195657~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vpcRegion;
    protected $_name = [
        'cenId'                    => 'CenId',
        'firewallSwitch'           => 'FirewallSwitch',
        'firewallVSwitchCidrBlock' => 'FirewallVSwitchCidrBlock',
        'firewallVpcCidrBlock'     => 'FirewallVpcCidrBlock',
        'firewallVpcZoneId'        => 'FirewallVpcZoneId',
        'lang'                     => 'Lang',
        'memberUid'                => 'MemberUid',
        'networkInstanceId'        => 'NetworkInstanceId',
        'vSwitchId'                => 'VSwitchId',
        'vpcFirewallName'          => 'VpcFirewallName',
        'vpcRegion'                => 'VpcRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->firewallSwitch) {
            $res['FirewallSwitch'] = $this->firewallSwitch;
        }
        if (null !== $this->firewallVSwitchCidrBlock) {
            $res['FirewallVSwitchCidrBlock'] = $this->firewallVSwitchCidrBlock;
        }
        if (null !== $this->firewallVpcCidrBlock) {
            $res['FirewallVpcCidrBlock'] = $this->firewallVpcCidrBlock;
        }
        if (null !== $this->firewallVpcZoneId) {
            $res['FirewallVpcZoneId'] = $this->firewallVpcZoneId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }
        if (null !== $this->vpcRegion) {
            $res['VpcRegion'] = $this->vpcRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcFirewallCenConfigureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['FirewallSwitch'])) {
            $model->firewallSwitch = $map['FirewallSwitch'];
        }
        if (isset($map['FirewallVSwitchCidrBlock'])) {
            $model->firewallVSwitchCidrBlock = $map['FirewallVSwitchCidrBlock'];
        }
        if (isset($map['FirewallVpcCidrBlock'])) {
            $model->firewallVpcCidrBlock = $map['FirewallVpcCidrBlock'];
        }
        if (isset($map['FirewallVpcZoneId'])) {
            $model->firewallVpcZoneId = $map['FirewallVpcZoneId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }
        if (isset($map['VpcRegion'])) {
            $model->vpcRegion = $map['VpcRegion'];
        }

        return $model;
    }
}
