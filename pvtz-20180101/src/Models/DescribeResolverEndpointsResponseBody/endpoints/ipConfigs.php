<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverEndpointsResponseBody\endpoints;

use AlibabaCloud\Tea\Model;

class ipConfigs extends Model
{
    /**
     * @description The ID of the zone where the vSwitch resides.
     *
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $azId;

    /**
     * @description The IPv4 CIDR block of the vSwitch.
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The IPv4 address.
     *
     * @example 172.16.xx.xx
     *
     * @var string
     */
    public $ip;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-8vbmks7h-test-vswitchId
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'azId'      => 'AzId',
        'cidrBlock' => 'CidrBlock',
        'ip'        => 'Ip',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azId) {
            $res['AzId'] = $this->azId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzId'])) {
            $model->azId = $map['AzId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
