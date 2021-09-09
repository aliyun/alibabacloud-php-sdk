<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeLogstashResponseBody\result;

use AlibabaCloud\Tea\Model;

class endpointList extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'zoneId' => 'zoneId',
        'port'   => 'port',
        'host'   => 'host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
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
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        return $model;
    }
}
