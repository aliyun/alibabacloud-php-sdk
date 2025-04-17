<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\AddServersToServerGroupRequest;

use AlibabaCloud\Dara\Model;

class servers extends Model
{
    /**
     * @var int
     */
    public $port;

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
    public $serverType;
    protected $_name = [
        'port' => 'Port',
        'serverId' => 'ServerId',
        'serverIp' => 'ServerIp',
        'serverType' => 'ServerType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
