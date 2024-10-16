<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\AddServersToServerGroupRequest;

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
     * @description This parameter is required.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $serverId;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $serverIp;

    /**
     * @description This parameter is required.
     *
     * @example Ecs
     *
     * @var string
     */
    public $serverType;
    protected $_name = [
        'port'       => 'Port',
        'serverId'   => 'ServerId',
        'serverIp'   => 'ServerIp',
        'serverType' => 'ServerType',
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
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
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
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        return $model;
    }
}
