<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\containers\readinessProbe;

use AlibabaCloud\Tea\Model;

class tcpSocket extends Model
{
    /**
     * @description The hostname.
     *
     * @example 1.2.3.4
     *
     * @var string
     */
    public $host;

    /**
     * @description The port number.
     *
     * @example 8888
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'host' => 'Host',
        'port' => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
