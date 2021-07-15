<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ReplaceServersInServerGroupRequest;

use AlibabaCloud\Tea\Model;

class removedServers extends Model
{
    /**
     * @description 后端服务器id
     *
     * @var string
     */
    public $serverId;

    /**
     * @description 后端服务器ip
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description 后端服务器类型
     *
     * @var string
     */
    public $serverType;

    /**
     * @description 端口
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'serverId'   => 'ServerId',
        'serverIp'   => 'ServerIp',
        'serverType' => 'ServerType',
        'port'       => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removedServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
