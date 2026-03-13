<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20130221\Models\DescribeBackendServersResponseBody\listeners\listener\backendServers;

use AlibabaCloud\Dara\Model;

class backendServer extends Model
{
    /**
     * @var string
     */
    public $serverHealthStatus;

    /**
     * @var string
     */
    public $serverId;
    protected $_name = [
        'serverHealthStatus' => 'ServerHealthStatus',
        'serverId' => 'ServerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serverHealthStatus) {
            $res['ServerHealthStatus'] = $this->serverHealthStatus;
        }

        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
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
        if (isset($map['ServerHealthStatus'])) {
            $model->serverHealthStatus = $map['ServerHealthStatus'];
        }

        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
