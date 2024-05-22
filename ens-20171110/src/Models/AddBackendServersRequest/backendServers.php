<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\AddBackendServersRequest;

use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @description The IP address of the backend server.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The backend port that is used by the ELB instance.
     *
     * @example 3309
     *
     * @var int
     */
    public $port;

    /**
     * @description The ID of the ENS instance.
     *
     * This parameter is required.
     * @example i-5uf6dwyzch3wly790****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The type of the backend server. Valid values:
     *
     *   **ens**: ENS instance.
     *   **eni**: ENI.
     *
     * @example ens
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server. Default value: 100. Valid values: **0** to **100**.
     *
     * >  The value 0 indicates that requests are not forwarded to the backend server.
     * @example 100
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
