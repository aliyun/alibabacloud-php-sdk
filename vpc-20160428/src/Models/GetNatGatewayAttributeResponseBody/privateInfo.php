<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class privateInfo extends Model
{
    /**
     * @description The ID of the elastic network interface (ENI).
     *
     * @example eni-bp1cmgtoaka8vfyg****
     *
     * @var string
     */
    public $eniInstanceId;

    /**
     * @description The zone where the NAT gateway is deployed.
     *
     * @example cn-qingdao-b
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
     * @example vsw-bp1s2laxhdf9ayjbo***
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'eniInstanceId' => 'EniInstanceId',
        'izNo' => 'IzNo',
        'maxBandwidth' => 'MaxBandwidth',
        'privateIpAddress' => 'PrivateIpAddress',
        'vswitchId' => 'VswitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
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
     * @return privateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
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
