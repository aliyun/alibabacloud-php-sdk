<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\servers\reason;
use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @example 6081
     *
     * @var int
     */
    public $port;

    /**
     * @var reason
     */
    public $reason;

    /**
     * @example i-2ze4rnh8yj9kif3z****
     *
     * @var string
     */
    public $serverId;

    /**
     * @example 192.168.0.XXX
     *
     * @var string
     */
    public $serverIp;

    /**
     * @example Healthy
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'port'     => 'Port',
        'reason'   => 'Reason',
        'serverId' => 'ServerId',
        'serverIp' => 'ServerIp',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->reason) {
            $res['Reason'] = null !== $this->reason ? $this->reason->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return servers
     */
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
