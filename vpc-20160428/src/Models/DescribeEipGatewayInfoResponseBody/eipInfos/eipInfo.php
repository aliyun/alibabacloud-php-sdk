<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos;

use AlibabaCloud\Dara\Model;

class eipInfo extends Model
{
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $ipGw;
    /**
     * @var string
     */
    public $ipMask;
    protected $_name = [
        'ip'     => 'Ip',
        'ipGw'   => 'IpGw',
        'ipMask' => 'IpMask',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->ipGw) {
            $res['IpGw'] = $this->ipGw;
        }

        if (null !== $this->ipMask) {
            $res['IpMask'] = $this->ipMask;
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IpGw'])) {
            $model->ipGw = $map['IpGw'];
        }

        if (isset($map['IpMask'])) {
            $model->ipMask = $map['IpMask'];
        }

        return $model;
    }
}
