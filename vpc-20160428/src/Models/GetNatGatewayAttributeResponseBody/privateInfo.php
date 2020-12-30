<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class privateInfo extends Model
{
    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $eniInstanceId;

    /**
     * @var int
     */
    public $maxBandwidth;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $izNo;
    protected $_name = [
        'vswitchId'        => 'VswitchId',
        'eniInstanceId'    => 'EniInstanceId',
        'maxBandwidth'     => 'MaxBandwidth',
        'privateIpAddress' => 'PrivateIpAddress',
        'izNo'             => 'IzNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
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
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }

        return $model;
    }
}
