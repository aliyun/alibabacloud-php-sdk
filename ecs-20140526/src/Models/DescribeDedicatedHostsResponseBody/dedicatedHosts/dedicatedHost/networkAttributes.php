<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class networkAttributes extends Model
{
    /**
     * @description The timeout period of the UDP session that was established between Server Load Balancer (SLB) and the dedicated host. Unit: seconds. Valid value: 60.
     *
     * @example 60
     *
     * @var int
     */
    public $slbUdpTimeout;

    /**
     * @description The timeout period of the UDP session that is established between a user and an Alibaba Cloud service on the dedicated host. Unit: seconds. Valid value: 60.
     *
     * @example 60
     *
     * @var int
     */
    public $udpTimeout;
    protected $_name = [
        'slbUdpTimeout' => 'SlbUdpTimeout',
        'udpTimeout'    => 'UdpTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbUdpTimeout) {
            $res['SlbUdpTimeout'] = $this->slbUdpTimeout;
        }
        if (null !== $this->udpTimeout) {
            $res['UdpTimeout'] = $this->udpTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbUdpTimeout'])) {
            $model->slbUdpTimeout = $map['SlbUdpTimeout'];
        }
        if (isset($map['UdpTimeout'])) {
            $model->udpTimeout = $map['UdpTimeout'];
        }

        return $model;
    }
}
