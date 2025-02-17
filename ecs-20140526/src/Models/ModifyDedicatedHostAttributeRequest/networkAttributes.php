<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostAttributeRequest;

use AlibabaCloud\Dara\Model;

class networkAttributes extends Model
{
    /**
     * @var int
     */
    public $slbUdpTimeout;
    /**
     * @var int
     */
    public $udpTimeout;
    protected $_name = [
        'slbUdpTimeout' => 'SlbUdpTimeout',
        'udpTimeout'    => 'UdpTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
