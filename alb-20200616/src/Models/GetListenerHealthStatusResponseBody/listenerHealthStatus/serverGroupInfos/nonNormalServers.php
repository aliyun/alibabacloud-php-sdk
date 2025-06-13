<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\nonNormalServers\reason;

class nonNormalServers extends Model
{
    /**
     * @var int
     */
    public $port;

    /**
     * @var reason
     */
    public $reason;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'port' => 'Port',
        'reason' => 'Reason',
        'serverId' => 'ServerId',
        'serverIp' => 'ServerIp',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->reason) {
            $this->reason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->reason) {
            $res['Reason'] = null !== $this->reason ? $this->reason->toArray($noStream) : $this->reason;
        }

        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Reason'])) {
            $model->reason = reason::fromMap($map['Reason']);
        }

        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
