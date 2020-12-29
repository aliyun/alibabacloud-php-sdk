<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

use AlibabaCloud\Tea\Model;

class networkAttributes extends Model
{
    /**
     * @var int
     */
    public $udpTimeout;

    /**
     * @var int
     */
    public $slbUdpTimeout;
    protected $_name = [
        'udpTimeout'    => 'UdpTimeout',
        'slbUdpTimeout' => 'SlbUdpTimeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->udpTimeout) {
            $res['UdpTimeout'] = $this->udpTimeout;
        }
        if (null !== $this->slbUdpTimeout) {
            $res['SlbUdpTimeout'] = $this->slbUdpTimeout;
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
        if (isset($map['UdpTimeout'])) {
            $model->udpTimeout = $map['UdpTimeout'];
        }
        if (isset($map['SlbUdpTimeout'])) {
            $model->slbUdpTimeout = $map['SlbUdpTimeout'];
        }

        return $model;
    }
}
