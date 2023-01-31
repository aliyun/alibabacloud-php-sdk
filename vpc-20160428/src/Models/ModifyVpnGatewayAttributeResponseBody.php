<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpnGatewayAttributeResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPropagate;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example 1492753580000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableBgp;

    /**
     * @example 1495382400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 116.62.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @example 172.27.30.24
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B457
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5M
     *
     * @var string
     */
    public $spec;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-bp1y9ovl1cu9ou4tv****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1ub1yt9cvakoel****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vpn-bp1q8bgx4xnkm2ogj****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'autoPropagate'  => 'AutoPropagate',
        'businessStatus' => 'BusinessStatus',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'enableBgp'      => 'EnableBgp',
        'endTime'        => 'EndTime',
        'internetIp'     => 'InternetIp',
        'intranetIp'     => 'IntranetIp',
        'name'           => 'Name',
        'requestId'      => 'RequestId',
        'spec'           => 'Spec',
        'status'         => 'Status',
        'vSwitchId'      => 'VSwitchId',
        'vpcId'          => 'VpcId',
        'vpnGatewayId'   => 'VpnGatewayId',
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
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpnGatewayAttributeResponseBody
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
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
