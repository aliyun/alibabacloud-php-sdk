<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePrivateDnsEndpointListRequest extends Model
{
    /**
     * @example pd-12345
     *
     * @var string
     */
    public $accessInstanceId;

    /**
     * @var string
     */
    public $accessInstanceName;

    /**
     * @example vpc
     *
     * @var string
     */
    public $firewallType;

    /**
     * @example 135809047715****
     *
     * @var int
     */
    public $memberUid;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @example normal
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-8vbwbo90rq0anm6t****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessInstanceId' => 'AccessInstanceId',
        'accessInstanceName' => 'AccessInstanceName',
        'firewallType' => 'FirewallType',
        'memberUid' => 'MemberUid',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'regionNo' => 'RegionNo',
        'status' => 'Status',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }
        if (null !== $this->accessInstanceName) {
            $res['AccessInstanceName'] = $this->accessInstanceName;
        }
        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribePrivateDnsEndpointListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }
        if (isset($map['AccessInstanceName'])) {
            $model->accessInstanceName = $map['AccessInstanceName'];
        }
        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
