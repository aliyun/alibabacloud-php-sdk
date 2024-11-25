<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\UpdateResolverRuleRequest;

use AlibabaCloud\Tea\Model;

class forwardIp extends Model
{
    /**
     * @description The IP address of the destination server.
     *
     * >  You cannot specify the following IP addresses as the IP addresses of the external DNS servers because the IP addresses are reserved by the system: 100.100.2.136 to 100.100.2.138, and 100.100.2.116 to 100.100.2.118.
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The port of the destination server.
     *
     * @example 8080
     *
     * @var int
     */
    public $port;
    protected $_name = [
        'ip'   => 'Ip',
        'port' => 'Port',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardIp
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

        return $model;
    }
}
