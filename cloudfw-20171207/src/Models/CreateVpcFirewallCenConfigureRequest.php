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
        'cenId'             => 'CenId',
        'firewallSwitch'    => 'FirewallSwitch',
        'lang'              => 'Lang',
        'memberUid'         => 'MemberUid',
        'networkInstanceId' => 'NetworkInstanceId',
        'vSwitchId'         => 'VSwitchId',
        'vpcFirewallName'   => 'VpcFirewallName',
        'vpcRegion'         => 'VpcRegion',
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
