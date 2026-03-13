<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models\DescribeBackendServersResponseBody\listeners;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20130221\Models\DescribeBackendServersResponseBody\listeners\listener\backendServers;

class listener extends Model
{
    /**
     * @var backendServers
     */
    public $backendServers;

    /**
     * @var int
     */
    public $listenerPort;
    protected $_name = [
        'backendServers' => 'BackendServers',
        'listenerPort' => 'ListenerPort',
    ];

    public function validate()
    {
        if (null !== $this->backendServers) {
            $this->backendServers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toArray($noStream) : $this->backendServers;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
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
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        return $model;
    }
}
