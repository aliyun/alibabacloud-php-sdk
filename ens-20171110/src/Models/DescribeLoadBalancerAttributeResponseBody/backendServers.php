<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @description The IP address of the backend server.
     *
     * @example 192.168.0.5
     *
     * @var string
     */
    public $ip;

    /**
     * @description The port that is used by the backend server.
     *
     * @example 0
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the backend server.
     *
     * @example i-5vb5h5njxiuhn48a****
     *
     * @var string
     */
    public $serverId;

    /**
     * @description The type of the backend server.
     *
     * @example ens
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the backend server.
     *
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
