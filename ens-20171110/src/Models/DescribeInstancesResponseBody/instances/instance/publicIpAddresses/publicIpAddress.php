<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\publicIpAddresses;

use AlibabaCloud\Tea\Model;

class publicIpAddress extends Model
{
    /**
     * @example 119.147.xx.xx
     *
     * @var string
     */
    public $gateWay;

    /**
     * @example 119.147.xx.xx
     *
     * @var string
     */
    public $ip;

    /**
     * @example unicom
     *
     * @var string
     */
    public $isp;
    protected $_name = [
        'gateWay' => 'GateWay',
        'ip'      => 'Ip',
        'isp'     => 'Isp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gateWay) {
            $res['GateWay'] = $this->gateWay;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GateWay'])) {
            $model->gateWay = $map['GateWay'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
