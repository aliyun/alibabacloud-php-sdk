<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance\publicIpAddresses;

use AlibabaCloud\Tea\Model;

class publicIpAddress extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $gateWay;

    /**
     * @var string
     */
    public $isp;
    protected $_name = [
        'ip'      => 'Ip',
        'gateWay' => 'GateWay',
        'isp'     => 'Isp',
    ];

    public function validate()
    {
        Model::validateRequired('ip', $this->ip, true);
        Model::validateRequired('gateWay', $this->gateWay, true);
        Model::validateRequired('isp', $this->isp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->gateWay) {
            $res['GateWay'] = $this->gateWay;
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['GateWay'])) {
            $model->gateWay = $map['GateWay'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
