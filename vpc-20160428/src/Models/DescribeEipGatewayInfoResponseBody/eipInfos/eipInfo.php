<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos;

use AlibabaCloud\Tea\Model;

class eipInfo extends Model
{
    /**
     * @description The IP address of the EIP.
     *
     * @example 47.XX.XX.236
     *
     * @var string
     */
    public $ip;

    /**
     * @description The IP address of the gateway that is associated with the EIP.
     *
     * @example 47.XX.XX.1
     *
     * @var string
     */
    public $ipGw;

    /**
     * @description The subnet mask of the EIP.
     *
     * @example 255.255.255.0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return eipInfo
     */
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
