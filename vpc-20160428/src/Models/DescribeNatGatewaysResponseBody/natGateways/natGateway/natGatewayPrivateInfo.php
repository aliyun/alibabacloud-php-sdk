<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway;

use AlibabaCloud\Tea\Model;

class natGatewayPrivateInfo extends Model
{
    /**
     * @example eni-m5eg4ozy5st8q3q4****
     *
     * @var string
     */
    public $eniInstanceId;

    /**
     * @example indirect
     *
     * @var string
     */
    public $eniType;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $izNo;

    /**
     * @example 5120
     *
     * @var int
     */
    public $maxBandwidth;

    /**
     * @example 100000
     *
     * @var int
     */
    public $maxSessionEstablishRate;

    /**
     * @example 2000000
     *
     * @var int
     */
    public $maxSessionQuota;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @example vsw-bp1s2laxhdf9ayjbo****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'eniInstanceId'           => 'EniInstanceId',
        'eniType'                 => 'EniType',
        'izNo'                    => 'IzNo',
        'maxBandwidth'            => 'MaxBandwidth',
        'maxSessionEstablishRate' => 'MaxSessionEstablishRate',
        'maxSessionQuota'         => 'MaxSessionQuota',
        'privateIpAddress'        => 'PrivateIpAddress',
        'vswitchId'               => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }
        if (null !== $this->eniType) {
            $res['EniType'] = $this->eniType;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }
        if (null !== $this->maxSessionEstablishRate) {
            $res['MaxSessionEstablishRate'] = $this->maxSessionEstablishRate;
        }
        if (null !== $this->maxSessionQuota) {
            $res['MaxSessionQuota'] = $this->maxSessionQuota;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGatewayPrivateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }
        if (isset($map['EniType'])) {
            $model->eniType = $map['EniType'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }
        if (isset($map['MaxSessionEstablishRate'])) {
            $model->maxSessionEstablishRate = $map['MaxSessionEstablishRate'];
        }
        if (isset($map['MaxSessionQuota'])) {
            $model->maxSessionQuota = $map['MaxSessionQuota'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
