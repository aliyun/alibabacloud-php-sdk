<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway;

use AlibabaCloud\Tea\Model;

class natGatewayPrivateInfo extends Model
{
    /**
     * @description The ID of the elastic network interface (ENI).
     *
     * @example eni-m5eg4ozy5st8q3q4****
     *
     * @var string
     */
    public $eniInstanceId;

    /**
     * @description The mode in which the ENI is associated with the NAT gateway.
     *
     *   **indirect**: non-cut-through mode
     *   If an empty value is returned, it indicates that the cut-through mode is used.
     *
     * @example indirect
     *
     * @var string
     */
    public $eniType;

    /**
     * @description The zone to which the NAT gateway belongs.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $izNo;

    /**
     * @description The maximum bandwidth. Unit: Mbit/s.
     *
     * @example 5120
     *
     * @var int
     */
    public $maxBandwidth;

    /**
     * @description The number of new connections to the NAT gateway. Unit: connections per second.
     *
     * @example 100000
     *
     * @var int
     */
    public $maxSessionEstablishRate;

    /**
     * @description The number of concurrent connections to the NAT gateway. Unit: connections.
     *
     * @example 2000000
     *
     * @var int
     */
    public $maxSessionQuota;

    /**
     * @description The private IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The ID of the vSwitch to which the NAT gateway belongs.
     *
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
