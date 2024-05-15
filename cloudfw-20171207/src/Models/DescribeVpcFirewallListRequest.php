<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallListRequest extends Model
{
    /**
     * @description The sub-type of the connection. Valid values:
     *
     *   **vpc2vpc**: Express Connect connection
     *   **vpcpeer**: peer connection
     *
     * @example vpcpeer
     *
     * @var string
     */
    public $connectSubType;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page **1**. Default value: **1**.
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description The status of the VPC firewall. Valid values:
     *
     *   **opened**: The VPC firewall is enabled.
     *   **closed**: The VPC firewall is disabled.
     *   **notconfigured**: The VPC firewall is not configured.
     *   **configured**: The VPC firewall is configured.
     *
     * > If you do not specify this parameter, VPC firewalls in all states are queried.
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

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
     * @description The number of entries to return on each page.
     *
     * Default value: **10**. Maximum value: **50**.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The UID of the Alibaba Cloud account to which the peer VPC belongs.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $peerUid;

    /**
     * @description The region ID of the VPC.
     *
     * > For more information about the regions, see [Supported regions](https://help.aliyun.com/document_detail/195657.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The instance ID of the VPC firewall.
     *
     * @example vfw-m5e7dbc4y****
     *
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @description The instance name of the VPC firewall.
     *
     * @example Test firewall
     *
     * @var string
     */
    public $vpcFirewallName;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectSubType'       => 'ConnectSubType',
        'currentPage'          => 'CurrentPage',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'lang'                 => 'Lang',
        'memberUid'            => 'MemberUid',
        'pageSize'             => 'PageSize',
        'peerUid'              => 'PeerUid',
        'regionNo'             => 'RegionNo',
        'vpcFirewallId'        => 'VpcFirewallId',
        'vpcFirewallName'      => 'VpcFirewallName',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectSubType) {
            $res['ConnectSubType'] = $this->connectSubType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->firewallSwitchStatus) {
            $res['FirewallSwitchStatus'] = $this->firewallSwitchStatus;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->peerUid) {
            $res['PeerUid'] = $this->peerUid;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectSubType'])) {
            $model->connectSubType = $map['ConnectSubType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FirewallSwitchStatus'])) {
            $model->firewallSwitchStatus = $map['FirewallSwitchStatus'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PeerUid'])) {
            $model->peerUid = $map['PeerUid'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
