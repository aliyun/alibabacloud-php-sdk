<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\nonNormalServers\reason;
use AlibabaCloud\Tea\Model;

class nonNormalServers extends Model
{
    /**
     * @description 后端服务器端口
     *
     * @var int
     */
    public $port;

    /**
     * @description status为非正常状态时的详细异常原因
     *
     * @var reason
     */
    public $reason;

    /**
     * @description 后端服务器id
     *
     * @var string
     */
    public $serverId;

    /**
     * @description 后端服务器Ip
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description 健康检查状态
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
