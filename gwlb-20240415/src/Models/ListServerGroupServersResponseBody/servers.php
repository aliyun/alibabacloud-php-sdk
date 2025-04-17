<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupServersResponseBody;

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
    public $serverGroupId;

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

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'port' => 'Port',
        'serverGroupId' => 'ServerGroupId',
        'serverId' => 'ServerId',
        'serverIp' => 'ServerIp',
        'serverType' => 'ServerType',
        'status' => 'Status',
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
