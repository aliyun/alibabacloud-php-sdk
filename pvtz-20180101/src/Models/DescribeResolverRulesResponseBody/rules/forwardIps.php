<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeResolverRulesResponseBody\rules;

use AlibabaCloud\Tea\Model;

class forwardIps extends Model
{
    /**
     * @description The IP address of the destination server.
     *
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
     * @return forwardIps
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
