<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeNatFirewallListRequest extends Model
{
    /**
     * @description The language of the content within the response. Valid values:
     *   **zh** (default)
     *   **en**
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 147783******
     *
     * @var int
     */
    public $memberUid;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example nat-bp123456g******
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * Maximum value: 50.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the NAT firewall.
     *
     * @example proxy-nat97a******
     *
     * @var string
     */
    public $proxyId;

    /**
     * @description The name of the NAT firewall. The name must be 4 to 50 characters in length, and can contain letters, digits, and underscores (_). The name cannot start with an underscore.
     *
     * @example proxy-******
     *
     * @var string
     */
    public $proxyName;

    /**
     * @description The region ID of the virtual private cloud (VPC).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The status of the NAT firewall. Valid values:
     *
     *   configuring
     *   deleting
     *   normal
     *   abnormal
     *   opening
     *   closing
     *   closed
     *
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'lang'         => 'Lang',
        'memberUid'    => 'MemberUid',
        'natGatewayId' => 'NatGatewayId',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'proxyId'      => 'ProxyId',
        'proxyName'    => 'ProxyName',
        'regionNo'     => 'RegionNo',
        'status'       => 'Status',
        'vpcId'        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->proxyName) {
            $res['ProxyName'] = $this->proxyName;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNatFirewallListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['ProxyName'])) {
            $model->proxyName = $map['ProxyName'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
