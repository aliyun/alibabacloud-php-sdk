<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus\serverGroupInfos;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus\serverGroupInfos\nonNormalServers\reason;
use AlibabaCloud\Tea\Model;

class nonNormalServers extends Model
{
    /**
     * @description The backend port.
     *
     * @example 90
     *
     * @var int
     */
    public $port;

    /**
     * @description The cause of the abnormal state.
     *
     * @var reason
     */
    public $reason;

    /**
     * @description The ID of the backend server.
     *
     * @example rg-bp1bfa08ex****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The IP address of the server group.
     *
     * @example 192.168.2.11
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description The status of the health check. Valid values: Valid values:
     *
     *   **Initial**: indicates that health checks are configured for the NLB instance, but no data was found.
     *   **Unhealthy**: indicates that the backend server consecutively fails health checks.
     *   **Unused**: indicates that the weight of the backend server is 0.
     *   **Unavailable**: indicates that health checks are disabled.
     *
     * @example Initial
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
     * @return nonNormalServers
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
