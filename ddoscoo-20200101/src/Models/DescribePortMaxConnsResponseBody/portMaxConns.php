<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortMaxConnsResponseBody;

use AlibabaCloud\Tea\Model;

class portMaxConns extends Model
{
    /**
     * @description The maximum number of connections per second (CPS).
     *
     * @example 100
     *
     * @var int
     */
    public $cps;

    /**
     * @description The IP address of the instance.
     *
     * @example 203.***.***.117
     *
     * @var string
     */
    public $ip;

    /**
     * @description The port of the instance.
     *
     * @example 80
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'cps'  => 'Cps',
        'ip'   => 'Ip',
        'port' => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portMaxConns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
