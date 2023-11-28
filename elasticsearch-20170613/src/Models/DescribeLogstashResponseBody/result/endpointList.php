<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result;

use AlibabaCloud\Tea\Model;

class endpointList extends Model
{
    /**
     * @description The tags added to the ALB instance.
     *
     * @example 172.16.**.**
     *
     * @var string
     */
    public $host;

    /**
     * @description The IP address of the node.
     *
     * @example 9600
     *
     * @var string
     */
    public $port;

    /**
     * @description The port number.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'host'   => 'host',
        'port'   => 'port',
        'zoneId' => 'zoneId',
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
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointList
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
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
