<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos;

use AlibabaCloud\Tea\Model;

class eipInfo extends Model
{
    /**
     * @var string
     */
    public $ipGw;

    /**
     * @var string
     */
    public $ipMask;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'ipGw'   => 'IpGw',
        'ipMask' => 'IpMask',
        'ip'     => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipGw) {
            $res['IpGw'] = $this->ipGw;
        }
        if (null !== $this->ipMask) {
            $res['IpMask'] = $this->ipMask;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpGw'])) {
            $model->ipGw = $map['IpGw'];
        }
        if (isset($map['IpMask'])) {
            $model->ipMask = $map['IpMask'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
