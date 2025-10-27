<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeSecurityProxyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $pageNo;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $proxyId;

    /**
     * @var string
     */
    public $proxyName;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'natGatewayId' => 'NatGatewayId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'proxyId' => 'ProxyId',
        'proxyName' => 'ProxyName',
        'regionNo' => 'RegionNo',
        'status' => 'Status',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
