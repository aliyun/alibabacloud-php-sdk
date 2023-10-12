<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenDetailResponseBody\localVpc;

use AlibabaCloud\Tea\Model;

class eniList extends Model
{
    /**
     * @description The ID of the ENI that belongs to the VPC.
     *
     * @example eni-8vbhfosfqv2rff42****
     *
     * @var string
     */
    public $eniId;

    /**
     * @description The private IP address of the ENI that belongs to the VPC.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $eniPrivateIpAddress;

    /**
     * @description The ID of the vSwitch to which the ENI is connected.
     *
     * @example vsw-wz9viido7j436b0n1****
     *
     * @var string
     */
    public $eniVSwitchId;
    protected $_name = [
        'eniId'               => 'EniId',
        'eniPrivateIpAddress' => 'EniPrivateIpAddress',
        'eniVSwitchId'        => 'EniVSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->eniPrivateIpAddress) {
            $res['EniPrivateIpAddress'] = $this->eniPrivateIpAddress;
        }
        if (null !== $this->eniVSwitchId) {
            $res['EniVSwitchId'] = $this->eniVSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eniList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['EniPrivateIpAddress'])) {
            $model->eniPrivateIpAddress = $map['EniPrivateIpAddress'];
        }
        if (isset($map['EniVSwitchId'])) {
            $model->eniVSwitchId = $map['EniVSwitchId'];
        }

        return $model;
    }
}
