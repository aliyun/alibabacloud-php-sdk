<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponseBody;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponseBody\peerVpc\vpcCidrTableList;
use AlibabaCloud\Tea\Model;

class peerVpc extends Model
{
    /**
     * @description The ID of the ENI for the peer VPC.
     *
     * @example eni-8vbhfosfqv2rff42****
     *
     * @var string
     */
    public $eniId;

    /**
     * @description The private IP address of the ENI for the peer VPC.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $eniPrivateIpAddress;

    /**
     * @description The region ID of the peer VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The router interface ID of the peer VPC.
     *
     * @example vrt-m5eb5me6c3l5sezae****
     *
     * @var string
     */
    public $routerInterfaceId;

    /**
     * @description The CIDR blocks of the peer VPC.
     *
     * @var vpcCidrTableList[]
     */
    public $vpcCidrTableList;

    /**
     * @description The ID of the peer VPC.
     *
     * @example vpc-90rq0anm6t8vbwbo****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the peer VPC.
     *
     * @example zcy_prod
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'eniId'               => 'EniId',
        'eniPrivateIpAddress' => 'EniPrivateIpAddress',
        'regionNo'            => 'RegionNo',
        'routerInterfaceId'   => 'RouterInterfaceId',
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
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->eniPrivateIpAddress) {
            $res['EniPrivateIpAddress'] = $this->eniPrivateIpAddress;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->routerInterfaceId) {
            $res['RouterInterfaceId'] = $this->routerInterfaceId;
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
     * @return peerVpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['EniPrivateIpAddress'])) {
            $model->eniPrivateIpAddress = $map['EniPrivateIpAddress'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['RouterInterfaceId'])) {
            $model->routerInterfaceId = $map['RouterInterfaceId'];
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
