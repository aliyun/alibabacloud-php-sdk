<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\localVpc\vpcCidrTableList;
use AlibabaCloud\Tea\Model;

class localVpc extends Model
{
    /**
     * @description Indicates whether the VPC is granted the required permissions. The value is fixed as **authorized**, which indicates that the VPC is granted the required permissions.
     *
     * @example authorized
     *
     * @var string
     */
    public $authorizationStatus;

    /**
     * @description An array consisting of the CIDR blocks that are protected by the VPC firewall.
     *
     * @var string[]
     */
    public $defendCidrList;

    /**
     * @description The ID of the specified vSwitch when the routing mode is manual.
     *
     * @example vsw-zeq4o875u****
     *
     * @var string
     */
    public $manualVSwitchId;

    /**
     * @description The ID of the network instance.
     *
     * @example vpc-2zefk9fbn8j7v585g****
     *
     * @var string
     */
    public $networkInstanceId;

    /**
     * @description The name of the network instance.
     *
     * @example Test VPC
     *
     * @var string
     */
    public $networkInstanceName;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**
     *   **VBR**
     *   **CCN**
     *
     * @example VPC
     *
     * @var string
     */
    public $networkInstanceType;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 158039427902****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the VPC.
     *
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
     * @example auto
     *
     * @var string
     */
    public $routeMode;

    /**
     * @description Indicates whether the manual routing mode is supported. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 0
     *
     * @var string
     */
    public $supportManualMode;

    /**
     * @description The edition of the CEN transit router. Valid values:
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
     * @description An array that consists of the CIDR blocks of the VPC.
     *
     * @var vpcCidrTableList[]
     */
    public $vpcCidrTableList;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example Test instance
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'authorizationStatus' => 'AuthorizationStatus',
        'defendCidrList'      => 'DefendCidrList',
        'manualVSwitchId'     => 'ManualVSwitchId',
        'networkInstanceId'   => 'NetworkInstanceId',
        'networkInstanceName' => 'NetworkInstanceName',
        'networkInstanceType' => 'NetworkInstanceType',
        'ownerId'             => 'OwnerId',
        'regionNo'            => 'RegionNo',
        'routeMode'           => 'RouteMode',
        'supportManualMode'   => 'SupportManualMode',
        'transitRouterType'   => 'TransitRouterType',
        'vpcCidrTableList'    => 'VpcCidrTableList',
        'vpcId'               => 'VpcId',
        'vpcName'             => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationStatus) {
            $res['AuthorizationStatus'] = $this->authorizationStatus;
        }
        if (null !== $this->defendCidrList) {
            $res['DefendCidrList'] = $this->defendCidrList;
        }
        if (null !== $this->manualVSwitchId) {
            $res['ManualVSwitchId'] = $this->manualVSwitchId;
        }
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }
        if (null !== $this->networkInstanceName) {
            $res['NetworkInstanceName'] = $this->networkInstanceName;
        }
        if (null !== $this->networkInstanceType) {
            $res['NetworkInstanceType'] = $this->networkInstanceType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->routeMode) {
            $res['RouteMode'] = $this->routeMode;
        }
        if (null !== $this->supportManualMode) {
            $res['SupportManualMode'] = $this->supportManualMode;
        }
        if (null !== $this->transitRouterType) {
            $res['TransitRouterType'] = $this->transitRouterType;
        }
        if (null !== $this->vpcCidrTableList) {
            $res['VpcCidrTableList'] = [];
            if (null !== $this->vpcCidrTableList && \is_array($this->vpcCidrTableList)) {
                $n = 0;
                foreach ($this->vpcCidrTableList as $item) {
                    $res['VpcCidrTableList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localVpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationStatus'])) {
            $model->authorizationStatus = $map['AuthorizationStatus'];
        }
        if (isset($map['DefendCidrList'])) {
            if (!empty($map['DefendCidrList'])) {
                $model->defendCidrList = $map['DefendCidrList'];
            }
        }
        if (isset($map['ManualVSwitchId'])) {
            $model->manualVSwitchId = $map['ManualVSwitchId'];
        }
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }
        if (isset($map['NetworkInstanceName'])) {
            $model->networkInstanceName = $map['NetworkInstanceName'];
        }
        if (isset($map['NetworkInstanceType'])) {
            $model->networkInstanceType = $map['NetworkInstanceType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RouteMode'])) {
            $model->routeMode = $map['RouteMode'];
        }
        if (isset($map['SupportManualMode'])) {
            $model->supportManualMode = $map['SupportManualMode'];
        }
        if (isset($map['TransitRouterType'])) {
            $model->transitRouterType = $map['TransitRouterType'];
        }
        if (isset($map['VpcCidrTableList'])) {
            if (!empty($map['VpcCidrTableList'])) {
                $model->vpcCidrTableList = [];
                $n                       = 0;
                foreach ($map['VpcCidrTableList'] as $item) {
                    $model->vpcCidrTableList[$n++] = null !== $item ? vpcCidrTableList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
