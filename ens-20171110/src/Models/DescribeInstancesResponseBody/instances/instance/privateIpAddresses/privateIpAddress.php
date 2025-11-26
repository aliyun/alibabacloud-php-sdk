<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance\privateIpAddresses;

use AlibabaCloud\Dara\Model;

class privateIpAddress extends Model
{
    /**
     * @var string
     */
    public $gateWay;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $isp;
    protected $_name = [
        'gateWay' => 'GateWay',
        'ip' => 'Ip',
        'isp' => 'Isp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
