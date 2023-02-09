<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls\localVpc\vpcCidrTableList;
use AlibabaCloud\Tea\Model;

class localVpc extends Model
{
    /**
     * @description Indicates whether Cloud Firewall is authorized to access the local VPC. The value is fixed as authorized, which indicates that Cloud Firewall is authorized to access the local VPC.
     *
     * @example authorized
     *
     * @var string
     */
    public $authorizationStatus;

    /**
     * @description The UID of the Alibaba Cloud account to which the local VPC belongs.
     *
     * @example 158039427902****
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the local VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The CIDR blocks of the local VPC.
     *
     * @var vpcCidrTableList[]
     */
    public $vpcCidrTableList;

    /**
     * @description The ID of the local VPC.
     *
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the local VPC.
     *
     * @example Test instance
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'authorizationStatus' => 'AuthorizationStatus',
        'ownerId'             => 'OwnerId',
        'regionNo'            => 'RegionNo',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
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
