<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupServersResponseBody;

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
     * @example sgp-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $serverId;

    /**
     * @example 192.168.xxx.xxx
     *
     * @var string
     */
    public $serverIp;

    /**
     * @example Ecs
     *
     * @var string
     */
    public $serverType;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'port'          => 'Port',
        'serverGroupId' => 'ServerGroupId',
        'serverId'      => 'ServerId',
        'serverIp'      => 'ServerIp',
        'serverType'    => 'ServerType',
        'status'        => 'Status',
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
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
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
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
