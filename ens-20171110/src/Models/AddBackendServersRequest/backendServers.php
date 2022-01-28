<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersRequest;

use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @description 端口
     *
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @description 后端服务器类型。  ens：ENS实例（默认）
     *
     * @var string
     */
    public $type;

    /**
     * @description 后端服务器的权重。  取值：0~100  默认值为100，如果值为0，则不会将请求转发给该后端服务器。
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'ip'       => 'Ip',
        'port'     => 'Port',
        'serverId' => 'ServerId',
        'type'     => 'Type',
        'weight'   => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
