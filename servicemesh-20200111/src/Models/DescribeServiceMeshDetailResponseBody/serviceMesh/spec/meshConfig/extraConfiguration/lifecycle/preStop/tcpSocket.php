<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration\lifecycle\preStop;

use AlibabaCloud\Tea\Model;

class tcpSocket extends Model
{
    /**
     * @description The URL of the request.
     *
     * @example 127.xx.xx.1
     *
     * @var string
     */
    public $host;

    /**
     * @description The port number of the request.
     *
     * @example 888
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'host' => 'host',
        'port' => 'port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tcpSocket
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
