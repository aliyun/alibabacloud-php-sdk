<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNatFirewallListResponseBody;

use AlibabaCloud\Tea\Model;

class natFirewallList extends Model
{
    /**
     * @example 19106481******
     *
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $errorDetail;

    /**
     * @example 19106481******
     *
     * @var int
     */
    public $memberUid;

    /**
     * @example ngw-uf6tnblxip4qcxg******
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;

    /**
     * @example proxy-nat30******
     *
     * @var string
     */
    public $proxyId;

    /**
     * @var string
     */
    public $proxyName;

    /**
     * @example normal
     *
     * @var string
     */
    public $proxyStatus;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 0
     *
     * @var int
     */
    public $strictMode;

    /**
     * @example vpc-2ze26ya******
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'aliUid'         => 'AliUid',
        'errorDetail'    => 'ErrorDetail',
        'memberUid'      => 'MemberUid',
        'natGatewayId'   => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'proxyId'        => 'ProxyId',
        'proxyName'      => 'ProxyName',
        'proxyStatus'    => 'ProxyStatus',
        'regionId'       => 'RegionId',
        'strictMode'     => 'StrictMode',
        'vpcId'          => 'VpcId',
        'vpcName'        => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->errorDetail) {
            $res['ErrorDetail'] = $this->errorDetail;
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
        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->strictMode) {
            $res['StrictMode'] = $this->strictMode;
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
     * @return natFirewallList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ErrorDetail'])) {
            $model->errorDetail = $map['ErrorDetail'];
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
        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StrictMode'])) {
            $model->strictMode = $map['StrictMode'];
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
