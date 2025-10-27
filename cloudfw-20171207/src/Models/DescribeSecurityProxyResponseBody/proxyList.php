<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSecurityProxyResponseBody;

use AlibabaCloud\Dara\Model;

class proxyList extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $detail;

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
    public $natGatewayName;

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
     * @var string[]
     */
    public $snatIpList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $strictMode;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'detail' => 'Detail',
        'memberUid' => 'MemberUid',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'proxyId' => 'ProxyId',
        'proxyName' => 'ProxyName',
        'regionNo' => 'RegionNo',
        'snatIpList' => 'SnatIpList',
        'status' => 'Status',
        'strictMode' => 'StrictMode',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate()
    {
        if (\is_array($this->snatIpList)) {
            Model::validateArray($this->snatIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
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

        if (null !== $this->snatIpList) {
            if (\is_array($this->snatIpList)) {
                $res['SnatIpList'] = [];
                $n1 = 0;
                foreach ($this->snatIpList as $item1) {
                    $res['SnatIpList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
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
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
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

        if (isset($map['SnatIpList'])) {
            if (!empty($map['SnatIpList'])) {
                $model->snatIpList = [];
                $n1 = 0;
                foreach ($map['SnatIpList'] as $item1) {
                    $model->snatIpList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
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
