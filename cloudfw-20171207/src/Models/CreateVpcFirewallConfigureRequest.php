<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcFirewallConfigureRequest extends Model
{
    /**
     * @description The status of the VPC firewall after you create the firewall. Valid values:
     *
     *   **open**: After you create the VPC firewall, the VPC firewall is automatically enabled. This is the default value.
     *   **close**: After you create the VPC firewall, the VPC firewall is disabled. To enable the firewall, you can call the [ModifyVpcFirewallSwitchStatus](~~342935~~) operation.
     *
     * @example open
     *
     * @var string
     */
    public $firewallSwitch;

    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The CIDR blocks of the local VPC. The value is a JSON string that contains the following parameters:
     *
     *   **RouteTableId**: the ID of the route table for the local VPC.
     *   **RouteEntryList**: The value is a JSON string that contains the DestinationCidr and NextHopInstanceId parameters. The DestinationCidr parameter indicates the destination CIDR block of the local VPC. The NextHopInstanceId parameter indicates the instance ID of the next hop for the local VPC.
     *
     * @example [{"RouteTableId":"vtb-1234","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]},{"RouteTableId":"vtb-1235","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]}]
     *
     * @var string
     */
    public $localVpcCidrTableList;

    /**
     * @description The ID of the local VPC.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $localVpcId;

    /**
     * @description The region ID of the local VPC.
     *
     * >  For more information about the regions in which Cloud Firewall is available, see [Supported regions](~~195657~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $localVpcRegion;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The CIDR blocks of the peer VPC. The value is a JSON string that contains the following parameters:
     *
     *   **RouteTableId**: the ID of the route table for the peer VPC.
     *   **RouteEntryList**: The value is a JSON string that contains the DestinationCidr and NextHopInstanceId parameters. The DestinationCidr parameter indicates the destination CIDR block of the peer VPC. The NextHopInstanceId parameter indicates the instance ID of the next hop for the peer VPC.
     *
     * @example [{"RouteTableId":"vtb-1234","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]},{"RouteTableId":"vtb-1235","RouteEntryList":[{"DestinationCidr":"192.168.XX.XX/24","NextHopInstanceId":"vrt-m5eb5me6c3l5sezae****"}]}]
     *
     * @var string
     */
    public $peerVpcCidrTableList;

    /**
     * @description The ID of the peer VPC.
     *
     * @example vpc-wb8vbo90rq0anm6t****
     *
     * @var string
     */
    public $peerVpcId;

    /**
     * @description The region ID of the peer VPC.
     *
     * >  For more information about Cloud Firewall supported regions, see [Supported regions](~~195657~~).
     * @example cn-shanghai
     *
     * @var string
     */
    public $peerVpcRegion;

    /**
     * @description The instance name of the VPC firewall.
     *
     * @example my-vpc-firewall
     *
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'firewallSwitch'        => 'FirewallSwitch',
        'lang'                  => 'Lang',
        'localVpcCidrTableList' => 'LocalVpcCidrTableList',
        'localVpcId'            => 'LocalVpcId',
        'localVpcRegion'        => 'LocalVpcRegion',
        'memberUid'             => 'MemberUid',
        'peerVpcCidrTableList'  => 'PeerVpcCidrTableList',
        'peerVpcId'             => 'PeerVpcId',
        'peerVpcRegion'         => 'PeerVpcRegion',
        'vpcFirewallName'       => 'VpcFirewallName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallSwitch) {
            $res['FirewallSwitch'] = $this->firewallSwitch;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->localVpcCidrTableList) {
            $res['LocalVpcCidrTableList'] = $this->localVpcCidrTableList;
        }
        if (null !== $this->localVpcId) {
            $res['LocalVpcId'] = $this->localVpcId;
        }
        if (null !== $this->localVpcRegion) {
            $res['LocalVpcRegion'] = $this->localVpcRegion;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->peerVpcCidrTableList) {
            $res['PeerVpcCidrTableList'] = $this->peerVpcCidrTableList;
        }
        if (null !== $this->peerVpcId) {
            $res['PeerVpcId'] = $this->peerVpcId;
        }
        if (null !== $this->peerVpcRegion) {
            $res['PeerVpcRegion'] = $this->peerVpcRegion;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcFirewallConfigureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallSwitch'])) {
            $model->firewallSwitch = $map['FirewallSwitch'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LocalVpcCidrTableList'])) {
            $model->localVpcCidrTableList = $map['LocalVpcCidrTableList'];
        }
        if (isset($map['LocalVpcId'])) {
            $model->localVpcId = $map['LocalVpcId'];
        }
        if (isset($map['LocalVpcRegion'])) {
            $model->localVpcRegion = $map['LocalVpcRegion'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PeerVpcCidrTableList'])) {
            $model->peerVpcCidrTableList = $map['PeerVpcCidrTableList'];
        }
        if (isset($map['PeerVpcId'])) {
            $model->peerVpcId = $map['PeerVpcId'];
        }
        if (isset($map['PeerVpcRegion'])) {
            $model->peerVpcRegion = $map['PeerVpcRegion'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
