<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponseBody\reservationData;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnGatewayResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeVpnGatewayResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoPropagate;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableBgp;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $ipsecVpn;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reservationData
     */
    public $reservationData;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $sslMaxConnections;

    /**
     * @var string
     */
    public $sslVpn;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var tags
     */
    public $tags;

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
    public $vpnGatewayId;

    /**
     * @var string
     */
    public $vpnType;
    protected $_name = [
        'autoPropagate'     => 'AutoPropagate',
        'businessStatus'    => 'BusinessStatus',
        'chargeType'        => 'ChargeType',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'enableBgp'         => 'EnableBgp',
        'endTime'           => 'EndTime',
        'internetIp'        => 'InternetIp',
        'ipsecVpn'          => 'IpsecVpn',
        'name'              => 'Name',
        'requestId'         => 'RequestId',
        'reservationData'   => 'ReservationData',
        'spec'              => 'Spec',
        'sslMaxConnections' => 'SslMaxConnections',
        'sslVpn'            => 'SslVpn',
        'status'            => 'Status',
        'tag'               => 'Tag',
        'tags'              => 'Tags',
        'vSwitchId'         => 'VSwitchId',
        'vpcId'             => 'VpcId',
        'vpnGatewayId'      => 'VpnGatewayId',
        'vpnType'           => 'VpnType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPropagate) {
            $res['AutoPropagate'] = $this->autoPropagate;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableBgp) {
            $res['EnableBgp'] = $this->enableBgp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->ipsecVpn) {
            $res['IpsecVpn'] = $this->ipsecVpn;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reservationData) {
            $res['ReservationData'] = null !== $this->reservationData ? $this->reservationData->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->sslMaxConnections) {
            $res['SslMaxConnections'] = $this->sslMaxConnections;
        }
        if (null !== $this->sslVpn) {
            $res['SslVpn'] = $this->sslVpn;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->vpnType) {
            $res['VpnType'] = $this->vpnType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpnGatewayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPropagate'])) {
            $model->autoPropagate = $map['AutoPropagate'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableBgp'])) {
            $model->enableBgp = $map['EnableBgp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IpsecVpn'])) {
            $model->ipsecVpn = $map['IpsecVpn'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReservationData'])) {
            $model->reservationData = reservationData::fromMap($map['ReservationData']);
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['SslMaxConnections'])) {
            $model->sslMaxConnections = $map['SslMaxConnections'];
        }
        if (isset($map['SslVpn'])) {
            $model->sslVpn = $map['SslVpn'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['VpnType'])) {
            $model->vpnType = $map['VpnType'];
        }

        return $model;
    }
}
