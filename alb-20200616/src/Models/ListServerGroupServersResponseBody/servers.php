<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupServersResponseBody;

use AlibabaCloud\Tea\Model;

class servers extends Model
{
    /**
     * @description 描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 端口
     *
     * @var int
     */
    public $port;

    /**
     * @description 服务器组id
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description 服务器id
     *
     * @var string
     */
    public $serverId;

    /**
     * @description 服务器ip
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
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 权重
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'description'   => 'Description',
        'port'          => 'Port',
        'serverGroupId' => 'ServerGroupId',
        'serverId'      => 'ServerId',
        'serverIp'      => 'ServerIp',
        'serverType'    => 'ServerType',
        'status'        => 'Status',
        'weight'        => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
