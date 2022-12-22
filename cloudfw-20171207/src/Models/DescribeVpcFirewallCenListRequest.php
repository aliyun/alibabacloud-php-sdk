<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallCenListRequest extends Model
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
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
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
     *   **notconfigured**: The VPC firewall is not created.
     *   **configured**: The VPC firewall is created but is not enabled.
     *
     * >  If you do not specify this parameter, VPC firewalls in all states are queried.
     * @example opened
     *
     * @var string
     */
    public $firewallSwitchStatus;

    /**
     * @description The language of the content within the response. Valid values:
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
     * @description The UID of the member that is manged by your Alibaba Cloud account. The member is also an Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The ID of the network instance.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10. Maximum value: 50.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID of the VPC.
     *
     * >  For more information about the regions, see [Supported regions](~~195657~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The routing mode of the VPC firewall. Valid values:
     *
     *   **auto**: automatic mode
     *   **manual**: manual mode
     *
     * >  If you do not specify this parameter, VPC firewalls in all routing modes are queried.
     * @example auto
     *
     * @var string
     */
    public $routeMode;

    /**
     * @description The type of the transit router. Valid values:
     *
     *   **Basic**: Basic Edition transit router
     *   **Enterprise**: Enterprise Edition transit router
     *
     * @example Basic
     *
     * @var string
     */
    public $transitRouterType;

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
     * @example vfw1
     *
     * @var string
     */
    public $vpcFirewallName;
    protected $_name = [
        'cenId'                => 'CenId',
        'currentPage'          => 'CurrentPage',
        'firewallSwitchStatus' => 'FirewallSwitchStatus',
        'lang'                 => 'Lang',
        'memberUid'            => 'MemberUid',
        'networkInstanceId'    => 'NetworkInstanceId',
        'ownerId'              => 'OwnerId',
        'pageSize'             => 'PageSize',
        'regionNo'             => 'RegionNo',
        'routeMode'            => 'RouteMode',
        'transitRouterType'    => 'TransitRouterType',
        'vpcFirewallId'        => 'VpcFirewallId',
        'vpcFirewallName'      => 'VpcFirewallName',
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
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->routeMode) {
            $res['RouteMode'] = $this->routeMode;
        }
        if (null !== $this->transitRouterType) {
            $res['TransitRouterType'] = $this->transitRouterType;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }
        if (null !== $this->vpcFirewallName) {
            $res['VpcFirewallName'] = $this->vpcFirewallName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallCenListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
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
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RouteMode'])) {
            $model->routeMode = $map['RouteMode'];
        }
        if (isset($map['TransitRouterType'])) {
            $model->transitRouterType = $map['TransitRouterType'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }
        if (isset($map['VpcFirewallName'])) {
            $model->vpcFirewallName = $map['VpcFirewallName'];
        }

        return $model;
    }
}
