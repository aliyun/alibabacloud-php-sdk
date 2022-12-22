<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\localVpc\eniList;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\localVpc\vpcCidrTableList;
use AlibabaCloud\Tea\Model;

class localVpc extends Model
{
    /**
     * @description The ID of the connection between two network instances.
     *
     * @example tr-attach-sxig7bye51fid5****
     *
     * @var string
     */
    public $attachmentId;

    /**
     * @description The name of the connection between two network instances.
     *
     * @example local-test
     *
     * @var string
     */
    public $attachmentName;

    /**
     * @description The CIDR blocks that are protected by the VPC firewall.
     *
     * @var string[]
     */
    public $defendCidrList;

    /**
     * @description The Elastic Network Interfaces (ENIs).
     *
     * @var eniList[]
     */
    public $eniList;

    /**
     * @description The ID of the vSwitch. The value of this parameter is returned only when the RouteMode parameter is set to manual.
     *
     * @example vsw-zeq4o875u****
     *
     * @var string
     */
    public $manualVSwitchId;

    /**
     * @description The ID of the VPC for which the VPC firewall is created.
     *
     * @example vpc-2zefk9fbn8j7v585g****
     *
     * @var string
     */
    public $networkInstanceId;

    /**
     * @description The name of the network instance.
     *
     * @example test-network
     *
     * @var string
     */
    public $networkInstanceName;

    /**
     * @description The type of the network instance. The value is fixed as **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkInstanceType;

    /**
     * @description The UID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 158039427902****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The ID of the region in which the VPC resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The routing mode. Valid values:
     *
     *   auto
     *   manual
     *
     * @example auto
     *
     * @var string
     */
    public $routeMode;

    /**
     * @description Indicates whether the routing mode can be set to manual. Valid values:
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
     * @description The instance ID of the CEN transit router.
     *
     * @example tr-2zetwxskej633l3u1****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @description The edition of the CEN transit router. Valid values:
     *
     *   **Basic**: Basic Edition
     *   **Enterprise**: Enterprise Edition
     *
     * @example Basic
     *
     * @var string
     */
    public $transitRouterType;

    /**
     * @description The CIDR blocks of the VPC.
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
     * @example UAT
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'attachmentId'        => 'AttachmentId',
        'attachmentName'      => 'AttachmentName',
        'defendCidrList'      => 'DefendCidrList',
        'eniList'             => 'EniList',
        'manualVSwitchId'     => 'ManualVSwitchId',
        'networkInstanceId'   => 'NetworkInstanceId',
        'networkInstanceName' => 'NetworkInstanceName',
        'networkInstanceType' => 'NetworkInstanceType',
        'ownerId'             => 'OwnerId',
        'regionNo'            => 'RegionNo',
        'routeMode'           => 'RouteMode',
        'supportManualMode'   => 'SupportManualMode',
        'transitRouterId'     => 'TransitRouterId',
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
        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->defendCidrList) {
            $res['DefendCidrList'] = $this->defendCidrList;
        }
        if (null !== $this->eniList) {
            $res['EniList'] = [];
            if (null !== $this->eniList && \is_array($this->eniList)) {
                $n = 0;
                foreach ($this->eniList as $item) {
                    $res['EniList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
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
        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }
        if (isset($map['DefendCidrList'])) {
            if (!empty($map['DefendCidrList'])) {
                $model->defendCidrList = $map['DefendCidrList'];
            }
        }
        if (isset($map['EniList'])) {
            if (!empty($map['EniList'])) {
                $model->eniList = [];
                $n              = 0;
                foreach ($map['EniList'] as $item) {
                    $model->eniList[$n++] = null !== $item ? eniList::fromMap($item) : $item;
                }
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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
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
